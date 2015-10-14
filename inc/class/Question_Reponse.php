<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 13/10/2015
 * Time: 21:05
 */

namespace Inc;


class Question_Reponse {
    private $id_question_reponse;
    private $theme;
    private $auteur;
    private $question;
    private $tab_reponse;
    private $marqueur;

    function __construct($theme, $auteur, $question, $tab_reponse, $marqueur)
    {
        $this->theme = $theme;
        $this->auteur = $auteur;
        $this->question = $question;
        $this->tab_reponse = $tab_reponse;
        $this->marqueur = $marqueur;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getTabReponse()
    {
        return $this->tab_reponse;
    }

    /**
     * @param mixed $tab_reponse
     */
    public function setTabReponse($tab_reponse)
    {
        $this->tab_reponse = $tab_reponse;
    }

    /**
     * @return mixed
     */
    public function getMarqueur()
    {
        return $this->marqueur;
    }

    /**
     * @param mixed $marqueur
     */
    public function setMarqueur($marqueur)
    {
        $this->marqueur = $marqueur;
    }



}