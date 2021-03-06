<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMapPoints
 *
 * @ORM\Table(name="xenoblade_mappoints")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
 *     "mappoint" = "XenobladeMapPoints",
 *     "chestid" = "XenobladeChestMapPoints",
 *     "gp" = "XenobladeSecretLocationMapPoints",
 *     "evid" = "XenobladeEtherVeinMapPoints",
 *     "info" = "XenobladeInfoMapPoints",
 *     "merid" = "XenobladeMerchantMapPoints",
 *     "mid" = "XenobladeMissionMapPoints",
 *     "moid" = "XenobladeMonsterMapPoints",
 *     "pid" = "XenobladePersonMapPoints",
 *     "rp" = "XenobladeRegionMapPoints",
 *     "sfid" = "XenobladeStoryFightMapPoints",
 *     "storynoteid" = "XenobladeStoryNoteMapPoints",
 * })
 * @ORM\Entity
 */
class XenobladeMapPoints
{
    /**
     * @var int
     *
     * @ORM\Column(name="mpid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mpid;

    /**
     * @var XenobladeMaps|null
     * @ORM\ManyToOne(targetEntity="XenobladeMaps")
     * @ORM\JoinColumn(name="maid", referencedColumnName="maid")
     */
    private $map;

    /**
     * @var int
     *
     * @ORM\Column(name="xpos", type="integer", nullable=false)
     */
    private $xpos;

    /**
     * @var int
     *
     * @ORM\Column(name="ypos", type="integer", nullable=false)
     */
    private $ypos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_from", type="time", nullable=false)
     */
    private $timeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_until", type="time", nullable=false)
     */
    private $timeUntil;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMpid(): ?int
    {
        return $this->mpid;
    }

    public function getMap(): ?XenobladeMaps
    {
        return $this->map;
    }

    public function setMap(XenobladeMaps $map): self
    {
        $this->map = $map;

        return $this;
    }

    public function getXpos(): ?int
    {
        return $this->xpos;
    }

    public function setXpos(int $xpos): self
    {
        $this->xpos = $xpos;

        return $this;
    }

    public function getYpos(): ?int
    {
        return $this->ypos;
    }

    public function setYpos(int $ypos): self
    {
        $this->ypos = $ypos;

        return $this;
    }

    public function getTimeFrom(): ?\DateTimeInterface
    {
        return $this->timeFrom;
    }

    public function setTimeFrom(\DateTimeInterface $timeFrom): self
    {
        $this->timeFrom = $timeFrom;

        return $this;
    }

    public function getTimeUntil(): ?\DateTimeInterface
    {
        return $this->timeUntil;
    }

    public function setTimeUntil(\DateTimeInterface $timeUntil): self
    {
        $this->timeUntil = $timeUntil;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
