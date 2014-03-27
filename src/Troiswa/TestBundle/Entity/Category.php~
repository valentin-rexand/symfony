<?php

namespace Troiswa\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Troiswa\TestBundle\Entity\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     *@ORM\OneToMany(targetEntity="News", mappedBy="category")
     */
    private $news;

    public function __construct()
    {
        $this->news=new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Category
     */
    public function setNom($nom)
    {
        $this->setSlug($this->slugify($nom));
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function slugify($string)
    {
        $string=preg_replace('/\\W+/', '-', $string);
        $string=strtolower(trim($string, '-'));
        return $string;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Category
     *
     * @param \Troiswa\TestBundle\Entity\Category $Category
     * @return Category
     */
    public function addCategory(\Troiswa\TestBundle\Entity\Category $Category)
    {
        $this->Category[] = $Category;

        return $this;
    }

    /**
     * Remove Category
     *
     * @param \Troiswa\TestBundle\Entity\Category $Category
     */
    public function removeCategory(\Troiswa\TestBundle\Entity\Category $Category)
    {
        $this->Category->removeElement($Category);
    }

    /**
     * Get Category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->Category;
    }

    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Add news
     *
     * @param \Troiswa\TestBundle\Entity\News $news
     * @return Category
     */
    public function addNews(\Troiswa\TestBundle\Entity\News $news)
    {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \Troiswa\TestBundle\Entity\News $news
     */
    public function removeNews(\Troiswa\TestBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
