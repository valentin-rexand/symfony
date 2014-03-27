<?php

namespace Troiswa\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Troiswa\TestBundle\Entity\UserRepository")
 */
class User implements UserInterface, \Serializable, EquatableInterface 
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     *@var string
     *
     *@ORM\ManyToMany(targetEntity="Role", inversedBy="users")
     */
    private $roles;

    /**
     *
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="auteur")
     */
    private $commentaires;

    /**
     *
     *@ORM\OneToMany(targetEntity="News", mappedBy="auteur")
     */
    private $news;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     * @Assert\Email(
     *    message = "'{{ value }}' n'est pas un email valide.",
     *    checkMX = true
     * )
     */
    private $mail;


    public function __construct()
    {
        $this->salt=md5(uniqid(null, true));
        $this->roles=new ArrayCollection();
        $this->commentaires=new ArrayCollection();
        $this->news=new ArrayCollection();
    }

    public function eraseCredentials()
    {

    }

    public function serialize()
    {
        return serialize(array($this->id));
    }

    public function unserialize($serialized)
    {
        $data=unserialize($serialized);
        $this->id=$data[0];
    }

    public function isEqualTo(UserInterface $user)
    {
        return $this->username===$user->getUsername();
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }


    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
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

    /**
     * Set mail
     *
     * @param string $mail
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Add roles
     *
     * @param \Troiswa\TestBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\Troiswa\TestBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Troiswa\TestBundle\Entity\Role $roles
     */
    public function removeRole(\Troiswa\TestBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    /**
     * Add commentaires
     *
     * @param \Troiswa\TestBundle\Entity\Commentaire $commentaires
     * @return User
     */
    public function addCommentaire(\Troiswa\TestBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \Troiswa\TestBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\Troiswa\TestBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Add news
     *
     * @param \Troiswa\TestBundle\Entity\News $news
     * @return User
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
}
