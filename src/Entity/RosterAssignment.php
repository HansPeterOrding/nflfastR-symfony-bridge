<?php

declare(strict_types=1);

namespace HansPeterOrding\NflFastrSymfonyBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class RosterAssignment implements RosterAssignmentInterface
{
	public static array $statusMappings = [
		'ACT'                          => RosterAssignmentInterface::STATUS_ACTIVE,
		'Active'                       => RosterAssignmentInterface::STATUS_ACTIVE,
		'CUT'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'DEV'                          => RosterAssignmentInterface::STATUS_PRACTICE_SQUAD,
		'EXE'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'Inactive'                     => RosterAssignmentInterface::STATUS_INACTIVE,
		'Injured Reserve'              => RosterAssignmentInterface::STATUS_INJURED_RESERVE,
		'NA'                           => RosterAssignmentInterface::STATUS_INACTIVE,
		'NON'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'NWT'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'Physically Unable to Perform' => RosterAssignmentInterface::STATUS_PHYSICALLY_UNABLE_TO_PERFORM,
		'Practice Squad'               => RosterAssignmentInterface::STATUS_PRACTICE_SQUAD,
		'PUP'                          => RosterAssignmentInterface::STATUS_PHYSICALLY_UNABLE_TO_PERFORM,
		'RES'                          => RosterAssignmentInterface::STATUS_INJURED_RESERVE,
		'Reserve/COVID-19'             => RosterAssignmentInterface::STATUS_RESERVE_COVID,
		'RET'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'RFA'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'RSN'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'SUS'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'TRC'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'TRD'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'TRT'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'UDF'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'UFA'                          => RosterAssignmentInterface::STATUS_INACTIVE,
		'Voluntary Opt Out'            => RosterAssignmentInterface::STATUS_VOLUNTARY_OPT_OUT
	];

	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	protected ?int $id = null;

	/**
	 * @ORM\ManyToOne(targetEntity="HansPeterOrding\NflFastrSymfonyBundle\Entity\Team", inversedBy="rosterAssignments")
	 * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
	 */
	protected ?Team $team = null;

	/**
	 * @ORM\ManyToOne(targetEntity="HansPeterOrding\NflFastrSymfonyBundle\Entity\Player", inversedBy="rosterAssignments")
	 * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
	 */
	protected ?Player $player = null;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected ?int $season = null;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected ?string $position = null;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected ?string $depthChartPosition = null;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected ?int $jerseyNumber = null;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected ?string $status = null;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected ?DateTime $lastUpdated = null;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;

		return $this;
	}

	public function getTeam(): ?Team
	{
		return $this->team;
	}

	public function setTeam(?Team $team): self
	{
		$this->team = $team;

		return $this;
	}

	public function getPlayer(): ?Player
	{
		return $this->player;
	}

	public function setPlayer(?Player $player): self
	{
		$this->player = $player;

		return $this;
	}

	public function getSeason(): ?int
	{
		return $this->season;
	}

	public function setSeason(?int $season): self
	{
		$this->season = $season;

		return $this;
	}

	public function getPosition(): ?string
	{
		return $this->position;
	}

	public function setPosition(?string $position): self
	{
		$this->position = $position;

		return $this;
	}

	public function getDepthChartPosition(): ?string
	{
		return $this->depthChartPosition;
	}

	public function setDepthChartPosition(?string $depthChartPosition): self
	{
		$this->depthChartPosition = $depthChartPosition;

		return $this;
	}

	public function getJerseyNumber(): ?int
	{
		return $this->jerseyNumber;
	}

	public function setJerseyNumber(?int $jerseyNumber): self
	{
		$this->jerseyNumber = $jerseyNumber;

		return $this;
	}

	public function getStatus(): ?string
	{
		return $this->status;
	}

	public function setStatus(?string $status): self
	{
		$this->status = $status;

		return $this;
	}

	public function getLastUpdated(): ?DateTime
	{
		return $this->lastUpdated;
	}

	public function setLastUpdated(?DateTime $lastUpdated): self
	{
		$this->lastUpdated = $lastUpdated;

		return $this;
	}

	/**
	 * @ORM\PrePersist()
	 * @ORM\PreUpdate()
	 */
	public function updateLastUpdated()
	{
		$this->lastUpdated = new DateTime();
	}
}