<?php

namespace Italia\SpidSymfonyBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class CPSUser
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @package AppBundle\Entity
 */
abstract class SPIDUser implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="codice_fiscale", type="string", unique=true)
     */
    private $codiceFiscale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascita", type="datetime", nullable=true)
     */
    private $dataNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="luogo_nascita", type="text", nullable=true)
     */
    private $luogoNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_nascita", type="text", nullable=true)
     */
    private $provinciaNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="stato_nascita", type="text", nullable=true)
     */
    private $statoNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="sesso", type="string", nullable=true)
     */
    private $sesso;

    /**
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * @return \DateTime
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * @return string
     */
    public function getLuogoNascita()
    {
        return $this->luogoNascita;
    }

    /**
     * @return string
     */
    public function getProvinciaNascita()
    {
        return $this->provinciaNascita;
    }

    /**
     * @return string
     */
    public function getStatoNascita()
    {
        return $this->statoNascita;
    }

    /**
     * @return string
     */
    public function getSesso()
    {
        return $this->sesso;
    }
}
