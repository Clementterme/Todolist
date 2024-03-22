<?php

class Task {
    private $id;
    private $titre;
    private $description;
    private $date;
    private $priorite;
    private $categorie;
    private $DB;

    public function __construct($titre, $description, $date, $priorite, $categorie) {
        $this->titre = $titre;
        $this->description = $description;
        $this->date = $date;
        $this->priorite = $priorite;
        $this->categorie = $categorie;
      }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param   mixed  $id  
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param   mixed  $titre  
     *
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    
    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param   mixed  $description  
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param   mixed  $date  
     *
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    /**
     * Get the value of priorite
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set the value of priorite
     *
     * @param   mixed  $priorite  
     *
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;
    }
    
    /**
     * Get the value of categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @param   mixed  $categorie  
     *
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getAllTask() {
        $sql = "SELECT * FROM task";

        return  $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Task::class);
    }
    }