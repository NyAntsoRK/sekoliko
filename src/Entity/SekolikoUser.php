<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SekolikoUser
 *
 * @ORM\Table(name="sekoliko_user", uniqueConstraints={@ORM\UniqueConstraint(name="username_canonical_UNIQUE", columns={"username_canonical"}), @ORM\UniqueConstraint(name="email_canonical_UNIQUE", columns={"email_canonical"}), @ORM\UniqueConstraint(name="confirmation_token_UNIQUE", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class SekolikoUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=180, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=180, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=180, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmation_token", type="string", length=180, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", length=0, nullable=false)
     */
    private $roles;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr_firstname", type="string", length=255, nullable=true)
     */
    private $usrFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr_lastname", type="string", length=255, nullable=true)
     */
    private $usrLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr_address", type="string", length=255, nullable=true)
     */
    private $usrAddress;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="usr_date_create", type="datetime", nullable=true)
     */
    private $usrDateCreate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="usr_date_update", type="datetime", nullable=true)
     */
    private $usrDateUpdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr_phone", type="string", length=45, nullable=true)
     */
    private $usrPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr_photo", type="string", length=255, nullable=true)
     */
    private $usrPhoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usr_raison_sociale", type="string", length=255, nullable=true)
     */
    private $usrRaisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_color", type="string", length=10, nullable=false, options={"default"="#ff00ff"})
     */
    private $usrColor = '#ff00ff';


}
