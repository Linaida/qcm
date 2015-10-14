<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 13/10/2015
 * Time: 21:00
 */




class Qcm {
private $id_qcm;
private $suite_question_reponse ;

    function __construct($suite_question_reponse)
    {
        $this->suite_question_reponse = $suite_question_reponse;
    }

    /**
     * @return mixed
     */
    public function getSuiteQuestionReponse()
    {
        return $this->suite_question_reponse;
    }

    /**
     * @param mixed $suite_question_reponse
     */
    public function setSuiteQuestionReponse($suite_question_reponse)
    {
        $this->suite_question_reponse = $suite_question_reponse;
    }


}