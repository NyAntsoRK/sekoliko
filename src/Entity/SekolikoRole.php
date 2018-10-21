<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SekolikoRole
 *
 * @ORM\Table(name="sekoliko_role")
 * @ORM\Entity
 */
class SekolikoRole
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
     * @var string|null
     *
     * @ORM\Column(name="rl_name", type="string", length=45, nullable=true)
     */
    private $rlName;


}
