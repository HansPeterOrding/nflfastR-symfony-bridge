<?php

declare(strict_types=1);

namespace HansPeterOrding\NflFastrSymfonyBundle\Entity;

interface RosterAssignmentInterface
{
	public const COLUMN_ROSTERASSIGNMENT_POSITION = 'position';
	public const COLUMN_ROSTERASSIGNMENT_DEPTH_CHART_POSITION = 'depth_chart_position';
	public const COLUMN_ROSTERASSIGNMENT_JERSEY_NUMBER = 'jersey_number';
	public const COLUMN_ROSTERASSIGNMENT_STATUS = 'status';

	public const POSITION_CENTER = 'C';
	public const POSITION_CORNERBACK = 'CB';
	public const POSITION_DEFENSIVEBACK = 'DB';
	public const POSITION_DEFENSIVEEND = 'DE';
	public const POSITION_DEFENSIVELINER = 'DL';
	public const POSITION_DEFENSIVETACKLE = 'DT';
	public const POSITION_FULLBACK = 'FB';
	public const POSITION_FREESAFETY = 'FS';
	public const POSITION_GUARD = 'G';
	public const POSITION_HALFBACK = 'HB';
	public const POSITION_INSIDE_LINEBACKER = 'ILB';
	public const POSITION_KICKER = 'K';
	public const POSITION_KICKRETURNER = 'KR';
	public const POSITION_LINEBACKER = 'LB';
	public const POSITION_LONGSNAPPER = 'LS';
	public const POSITION_MIDDLE_LINEBACKER = 'MLB';
	public const POSITION_NOSETACKLE = 'NT';
	public const POSITION_OFFENSIVE_GUARD = 'OG';
	public const POSITION_OFFENSIVELINER = 'OL';
	public const POSITION_OUTSIDE_LINEBACKER = 'OLB';
	public const POSITION_OFFENSIVETACKLE = 'OT';
	public const POSITION_PUNTER = 'P';
	public const POSITION_QUARTERBACK = 'QB';
	public const POSITION_RUNNINGBACK = 'RB';
	public const POSITION_SAFETY = 'SAF';
	public const POSITION_STRONG_SAFETY = 'SS';
	public const POSITION_TACKLE = 'T';
	public const POSITION_TIGHTEND = 'TE';
	public const POSITION_WIDERECEIVER = 'WR';

	public const DEPTH_CHART_POSITION_CENTER = 'C';
	public const DEPTH_CHART_POSITION_CORNERBACK = 'CB';
	public const DEPTH_CHART_POSITION_DEFENSIVEBACK = 'DB';
	public const DEPTH_CHART_POSITION_DEFENSIVEEND = 'DE';
	public const DEPTH_CHART_POSITION_DEFENSIVEEND_OFFENSIVEBACK = 'DE/OB';
	public const DEPTH_CHART_POSITION_DEFENSIVE_PUNTRETURNER = 'DPR';
	public const DEPTH_CHART_POSITION_DEFENSIVETACKLE = 'DT';
	public const DEPTH_CHART_POSITION_FULLBACK = 'FB';
	public const DEPTH_CHART_POSITION_FULLBACK_OFFENSIVEGUARD = 'FB/OG';
	public const DEPTH_CHART_POSITION_FREE_SAFETY = 'FS';
	public const DEPTH_CHART_POSITION_INSIDE_LINEBACKER = 'ILB';
	public const DEPTH_CHART_POSITION_JACK = 'JACK';
	public const DEPTH_CHART_POSITION_KICKER = 'K';
	public const DEPTH_CHART_POSITION_LINEBACKER = 'LB';
	public const DEPTH_CHART_POSITION_LEFT_CORNERBACK = 'LCB';
	public const DEPTH_CHART_POSITION_LEFT_DEFENSIVEEND = 'LDE';
	public const DEPTH_CHART_POSITION_LEFT_DEFENSIVETACKLE = 'LDT';
	public const DEPTH_CHART_POSITION_LEO = 'LEO';
	public const DEPTH_CHART_POSITION_LEFT_GUARD = 'LG';
	public const DEPTH_CHART_POSITION_LEFT_INSIDE_LINEBACKER = 'LILB';
	public const DEPTH_CHART_POSITION_LEFT_OUTSIDE_LINEBACKER = 'LOLB';
	public const DEPTH_CHART_POSITION_LEFT_TACKLE = 'LT';
	public const DEPTH_CHART_POSITION_LEFT_TIGHTEND = 'LTE';
	public const DEPTH_CHART_POSITION_LEFT_WIDERECEIVER = 'LWR';
	public const DEPTH_CHART_POSITION_MIKE = 'MIKE';
	public const DEPTH_CHART_POSITION_MIDDLE_LINEBACKER = 'MLB';
	public const DEPTH_CHART_POSITION_NOT_AVAILABLE = 'NA';
	public const DEPTH_CHART_POSITION_NICKELBACK = 'NB';
	public const DEPTH_CHART_POSITION_NOSETACKLE = 'NT';
	public const DEPTH_CHART_POSITION_OUTSIDE_LINEBACKER = 'OLB';
	public const DEPTH_CHART_POSITION_PUNTER = 'P';
	public const DEPTH_CHART_POSITION_PUNTER_KICKER = 'PK';
	public const DEPTH_CHART_POSITION_QUARTERBACK = 'QB';
	public const DEPTH_CHART_POSITION_RUNNINGBACK = 'RB';
	public const DEPTH_CHART_POSITION_RIGHT_CORNERBACK = 'RCB';
	public const DEPTH_CHART_POSITION_RIGHT_DEFENSIVEEND = 'RDE';
	public const DEPTH_CHART_POSITION_RIGHT_DEFENSIVETACKLE = 'RDT';
	public const DEPTH_CHART_POSITION_RIGHT_GUARD = 'RG';
	public const DEPTH_CHART_POSITION_RIGHT_INSIDE_LINEBACKER = 'RILB';
	public const DEPTH_CHART_POSITION_RIGHT_OUTSIDE_LINEBACKER = 'ROLB';
	public const DEPTH_CHART_POSITION_RIGHT_TACKLE = 'RT';
	public const DEPTH_CHART_POSITION_TIGHT_TIGHTEND = 'RTE';
	public const DEPTH_CHART_POSITION_RUSHER = 'RUSH';
	public const DEPTH_CHART_POSITION_RIGHT_WIDERECEIVER = 'RWR';
	public const DEPTH_CHART_POSITION_SAFETY = 'S';
	public const DEPTH_CHART_POSITION_SAM = 'SAM';
	public const DEPTH_CHART_POSITION_STRONG_SIDE_INSIDE_LINEBACKER = 'SILB';
	public const DEPTH_CHART_POSITION_STRONG_SIDE_LINEBACKER = 'SLB';
	public const DEPTH_CHART_POSITION_STRONG_SAFETY = 'SS';
	public const DEPTH_CHART_POSITION_SLOT_WIDERECEIVER = 'SWR';
	public const DEPTH_CHART_POSITION_TIGHTEND = 'TE';
	public const DEPTH_CHART_POSITION_WILL = 'WILL';
	public const DEPTH_CHART_POSITION_WEAKSIDE_LINEBACKER = 'WLB';

	public const STATUS_ACTIVE = 'Active';
	public const STATUS_INACTIVE = 'Inactive';
	public const STATUS_INJURED_RESERVE = 'Injured Reserve';
	public const STATUS_PHYSICALLY_UNABLE_TO_PERFORM = 'Physically Unable to Perform';
	public const STATUS_PRACTICE_SQUAD = 'Practice Squad';
	public const STATUS_RESERVE_COVID = 'Reserve/COVID-19';
	public const STATUS_VOLUNTARY_OPT_OUT = 'Voluntary Opt Out';
}
