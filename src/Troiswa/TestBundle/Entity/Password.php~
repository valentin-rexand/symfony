<?php

namespace Troiswa\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

/**
 * Password
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Troiswa\TestBundle\Entity\PasswordRepository")
 */

class Password
{
    /**
     * @Assert\Length(
     *     min = 6,
     *     minMessage = "Password should by at least 6 chars long"
     * )
     */
     public $newPassword;
}
