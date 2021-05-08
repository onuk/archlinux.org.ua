<?php

if (!defined('PUN')) {
    exit;
}

class addon_funnyquestion extends flux_addon
{

    public function __construct()
    {
        global $funnyquestion_disabled, $funnyquestion_hash, $funny_questions, $funnyquestion_timeout, $funnyquestion_remember, $funnyquestion_wait, $pun_user, $lang_funnyquestion;

        !isset($funnyquestion_disabled) && $funnyquestion_disabled = false;
        !isset($funnyquestion_hash) && $funnyquestion_hash = dirname(__FILE__);
        !isset($funny_questions) && $funny_questions = array(
            'Яка кількість обласних центрів в Україні?' => '24'
        );
        !isset($funnyquestion_timeout) && $funnyquestion_timeout = 3600;
        !isset($funnyquestion_remember) && $funnyquestion_remember = 3600 * 24;
        !isset($funnyquestion_wait) && $funnyquestion_wait = 2;

        if (file_exists(PUN_ROOT . 'lang/' . $pun_user['language'] . '/funnyquestion.php')) {
            require PUN_ROOT . 'lang/' . $pun_user['language'] . '/funnyquestion.php';
        } else {
            require PUN_ROOT . 'lang/Ukrainian/funnyquestion.php';
        }
    }

    /**
     * @param flux_addon_manager $manager
     */
    public function register($manager)
    {
        $manager->bind('register_before_submit', array($this, 'print_funnyquestion'));
        $manager->bind('quickpost_before_submit', array($this, 'print_funnyquestion'));
        $manager->bind('post_before_submit', array($this, 'print_funnyquestion'));
        $manager->bind('register_before_validation', array($this, 'set_error_on_check_funnyquestion'));
        $manager->bind('post_before_validation', array($this, 'set_error_on_check_funnyquestion'));
    }

    public function print_funnyquestion()
    {
        echo $this->get_funnyquestion();
    }

    public function set_error_on_check_funnyquestion()
    {
        global $errors, $lang_funnyquestion;
        $this->check_funnyquestion() || $errors[] = $lang_funnyquestion['wrong-answer'];
    }

    /**
     * @param string $answer
     * @return string
     */
    private function normalize_funnyanswer($answer)
    {
        return preg_replace('/[^a-z0-9]/', '', strtolower($answer));
    }

    private function set_funnycookie()
    {
        global $funnyquestion_hash, $funnyquestion_remember;

        $time = time();
        forum_setcookie('funnyquestion_hash', sha1($time . get_remote_address() . $funnyquestion_hash),
            $time + $funnyquestion_remember);
        forum_setcookie('funnyquestion_time', $time, $time + $funnyquestion_remember);
    }

    /**
     * @return bool
     */
    private function has_funnycookie()
    {
        global $funnyquestion_hash, $funnyquestion_remember;

        return (!empty($_COOKIE['funnyquestion_hash']) && !empty($_COOKIE['funnyquestion_time'])
            && time() - $funnyquestion_remember <= $_COOKIE['funnyquestion_time']
            && sha1($_COOKIE['funnyquestion_time'] . get_remote_address() . $funnyquestion_hash) == $_COOKIE['funnyquestion_hash']);
    }

    /**
     * @return string
     */
    private function get_funnyquestion()
    {
        global $funnyquestion_disabled, $funnyquestion_hash, $funny_questions, $lang_funnyquestion, $lang_common, $pun_user;

        if ($funnyquestion_disabled || !$pun_user['is_guest'] || $this->has_funnycookie()) {
            return '';
        }

        $time = time();
        $question = array_rand($funny_questions);
        # make sure the user is not able to tell us the question to answer
        $hash = sha1($time . $question . $funnyquestion_hash);

        return '<div class="inform">
			<fieldset>
				<legend>' . $lang_funnyquestion['question-label'] . '</legend>
				<div class="infldset">
					<input type="hidden" name="funnyquestion_time" value="' . $time . '" />
					<input type="hidden" name="funnyquestion_hash" value="' . $hash . '" />
					<label class="required">
						<strong>' . $question . '<span>' . $lang_common['Required'] . '</span></strong><br />
						<input type="text" name="funny_answer" value="" size="50" /><br />
					</label>
				</div>
			</fieldset>
		</div>';
    }

    /**
     * @return bool
     */
    private function check_funnyquestion()
    {
        global $funnyquestion_disabled, $funnyquestion_hash, $funnyquestion_timeout, $funnyquestion_wait, $funny_questions, $pun_user;

        if ($funnyquestion_disabled || !$pun_user['is_guest'] || $this->has_funnycookie()) {
            return true;
        }

        if (!empty($_POST['funnyquestion_time'])
            && !empty($_POST['funnyquestion_hash'])
            && !empty($_POST['funny_answer'])
        ) {
            $now = time();
            $time = $_POST['funnyquestion_time'];
            $hash = $_POST['funnyquestion_hash'];
            $user_answer = $this->normalize_funnyanswer($_POST['funny_answer']);
        } else {
            return false;
        }

        if ($now - $time > $funnyquestion_timeout) {
            return false;
        } elseif ($now - $time < $funnyquestion_wait) {
            return false;
        }

        foreach ($funny_questions as $question => $answers) {
            if (!is_array($answers)) {
                $answers = array($answers);
            }
            foreach ($answers as $answer) {
                if ($this->normalize_funnyanswer($answer) == $user_answer
                    && $hash == sha1($time . $question . $funnyquestion_hash)
                ) {
                    $this->set_funnycookie();
                    return true;
                }
            }
        }

        return false;
    }
}
