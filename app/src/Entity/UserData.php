<?php
/**
 * UserData entity.
 */

namespace App\Entity;

use App\Repository\UserDataRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UserData.
 *
 * @ORM\Entity(repositoryClass=UserDataRepository::class)
 * @ORM\Table(name="user_data")
 */
class UserData
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
     *
     * @Assert\Email
     */
    private $email;

    /**
     * Phone.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=45,
     *     nullable=true)
     *
     * @Assert\Length(
     *     min="9",
     *     max="9",
     * )
     *
     * @Assert\Regex(
     *     pattern="/^[0-9]*$/")
     */
    private $phone;

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
     * Getter for Phone.
     *
     * @return string|null Phone
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Setter for Phone.
     *
     * @param string $phone Phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }
}
