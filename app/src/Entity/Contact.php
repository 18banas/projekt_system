<?php
/**
 * Contact entity.
 */

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Contact.
 *
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 * @ORM\Table(name="contacts")
 */
class Contact
{
    /**
     * Primary key.
     *
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Name.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=45)
     */
    private $name;

    /**
     * Surname.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=45)
     */
    private $surname;

    /**
     * Email.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=45,
     *     nullable=true)
     */
    private $email;

    /**
     * PhoneNum.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=45,
     *     nullable=true)
     */
    private $phonenum;

    /**
     * Getter for Id.
     *
     * @return int|null Result
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter for Name.
     *
     * @return string|null Name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Setter for Name.
     *
     * @param string $name Name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Getter for Surname.
     *
     * @return string|null Surname
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Setter for Surname.
     *
     * @param string $surname Surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * Getter for Email.
     *
     * @return string|null Email
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Setter for Email.
     *
     * @param string $email Email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Getter for PhoneNum.
     *
     * @return string|null PhoneNum
     */
    public function getPhoneNum(): ?string
    {
        return $this->phonenum;
    }

    /**
     * Setter for PhoneNum.
     *
     * @param string $phonenum PhoneNum
     */
    public function setPhoneNum(?string $phonenum): void
    {
        $this->phonenum = $phonenum;
    }
}
