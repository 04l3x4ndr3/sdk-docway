<?php

namespace O4l3x4ndr3\SdkDocway\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkDocway\Configuration;
use O4l3x4ndr3\SdkDocway\Helpers\CallApi;
use O4l3x4ndr3\SdkDocway\Types\Address;

class Appointment extends CallApi {

	private ?int $appointmentId;
	private ?string $dateAppointment;
	private ?string $buyerId;
	private ?string $insuranceId;
	private ?string $partnerId;
	private ?Address $address;
	private ?int $specialtyId;
	private ?bool $isInsurance;
	private ?int $type;
	private ?array $timeZone;
	private ?string $contactCode;
	private ?string $contactNumber;
	private ?string $contactEmail;
	private ?array $symptoms;
	private ?string $reason;
	private ?string $gop;

	public function __construct(?Configuration $configuration = NULL)
	{
		parent::__construct($configuration);

		$this->appointmentId = NULL;
		$this->dateAppointment = NULL;
		$this->buyerId = NULL;
		$this->insuranceId = NULL;
		$this->partnerId = NULL;
		$this->address = NULL;
		$this->specialtyId = NULL;
		$this->isInsurance = NULL;
		$this->type = NULL;
		$this->timeZone = NULL;
		$this->contactCode = NULL;
		$this->contactNumber = NULL;
		$this->contactEmail = NULL;
		$this->symptoms = NULL;
		$this->reason = NULL;
		$this->gop = NULL;
	}


	/**
	 * @return int|null
	 */
	public function getAppointmentId(): ?int
	{
		return $this->appointmentId;
	}

	/**
	 * @param int|null $appointmentId
	 * @return Appointment
	 */
	public function setAppointmentId(?int $appointmentId): self
	{
		$this->appointmentId = $appointmentId;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDateAppointment(): ?string
	{
		return $this->dateAppointment;
	}

	/**
	 * @param string|null $dateAppointment
	 * @return Appointment
	 */
	public function setDateAppointment(?string $dateAppointment): self
	{
		$this->dateAppointment = $dateAppointment;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBuyerId(): ?string
	{
		return $this->buyerId;
	}

	/**
	 * @param string|null $buyerId
	 * @return Appointment
	 */
	public function setBuyerId(?string $buyerId): self
	{
		$this->buyerId = $buyerId;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getInsuranceId(): ?string
	{
		return $this->insuranceId;
	}

	/**
	 * @param string|null $insuranceId
	 * @return Appointment
	 */
	public function setInsuranceId(?string $insuranceId): self
	{
		$this->insuranceId = $insuranceId;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPartnerId(): ?string
	{
		return $this->partnerId;
	}

	/**
	 * @param string|null $partnerId
	 * @return Appointment
	 */
	public function setPartnerId(?string $partnerId): self
	{
		$this->partnerId = $partnerId;
		return $this;
	}

	/**
	 * @return Address|null
	 */
	public function getAddress(): ?Address
	{
		return $this->address;
	}

	/**
	 * @param Address|null $address
	 * @return Appointment
	 */
	public function setAddress(?Address $address): self
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getSpecialtyId(): ?int
	{
		return $this->specialtyId;
	}

	/**
	 * @param int|null $specialtyId
	 * @return Appointment
	 */
	public function setSpecialtyId(?int $specialtyId): self
	{
		$this->specialtyId = $specialtyId;
		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function isInsurance(): ?bool
	{
		return $this->isInsurance;
	}

	/**
	 * @param bool $isInsurance
	 * @return Appointment
	 */
	public function setIsInsurance(bool $isInsurance): self
	{
		$this->isInsurance = $isInsurance;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getType(): ?int
	{
		return $this->type;
	}

	/**
	 * @param int|null $type
	 * @return Appointment
	 */
	public function setType(?int $type): self
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return array|null
	 */
	public function getTimeZone(): ?array
	{
		return $this->timeZone;
	}

	/**
	 * @param array|null $timeZone
	 * @return Appointment
	 */
	public function setTimeZone(?array $timeZone): self
	{
		$this->timeZone = $timeZone;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getContactCode(): ?string
	{
		return $this->contactCode;
	}

	/**
	 * @param string|null $contactCode
	 * @return Appointment
	 */
	public function setContactCode(?string $contactCode): self
	{
		$this->contactCode = $contactCode;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getContactNumber(): ?string
	{
		return $this->contactNumber;
	}

	/**
	 * @param string|null $contactNumber
	 * @return Appointment
	 */
	public function setContactNumber(?string $contactNumber): self
	{
		$this->contactNumber = $contactNumber;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getContactEmail(): ?string
	{
		return $this->contactEmail;
	}

	/**
	 * @param string|null $contactEmail
	 * @return Appointment
	 */
	public function setContactEmail(?string $contactEmail): self
	{
		$this->contactEmail = $contactEmail;
		return $this;
	}

	/**
	 * @return array|null
	 */
	public function getSymptoms(): ?array
	{
		return $this->symptoms;
	}

	/**
	 * @param array|null $symptoms
	 * @return Appointment
	 */
	public function setSymptoms(?array $symptoms): self
	{
		$this->symptoms = $symptoms;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getReason(): ?string
	{
		return $this->reason;
	}

	/**
	 * @param string|null $reason
	 * @return Appointment
	 */
	public function setReason(?string $reason): self
	{
		$this->reason = $reason;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getGop(): ?string
	{
		return $this->gop;
	}

	/**
	 * @param string|null $gop
	 * @return Appointment
	 */
	public function setGop(?string $gop): self
	{
		$this->gop = $gop;
		return $this;
	}

	/**
	 * @param string $patientId
	 * @param Appointment|NULL $appointment
	 * @return object
	 * @throws GuzzleException
	 */
	public function save(string $patientId, Appointment $appointment = NULL): object
	{
		$body = array_filter($this->toArray($appointment ?? $this));
		return $this->call('POST', "appointment/api/patients/{$patientId}/appointments", $body);
	}

	/**
	 * @param string $reason
	 * @param int $appointmentId
	 * @return object
	 * @throws GuzzleException
	 */
	public function cancel(string $reason, int $appointmentId): object
	{
		$body = [
			'reason' => $reason
		];
		return $this->call('POST', "appointment/api/appointments/{$appointmentId}/cancel", $body);
	}

	/**
	 * @param $startDate
	 * @param $endDate
	 * @param array|null $options
	 * @return object
	 * @throws GuzzleException
	 */
	public function getPaging($startDate, $endDate, ?array $options = NULL): object
	{
		$body = array_merge(["Start" => 0,
			"CurrentPage" => 0,
			"Limit" => 10,
			"Status" => [],
			"Types" => [
				6
			],
			"StartDate" => $startDate,
			"EndDate" => $endDate
		], $options);
		return $this->call('POST', "appointment/api/v2/partner/appointments", $body);
	}

	/**
	 * @param int $appointmentId
	 * @return object
	 * @throws GuzzleException
	 */
	public function getDetail(int $appointmentId): object
	{
		return $this->call('GET', "appointment/api/appointments/{$appointmentId}/details");
	}

	/**
	 * @param int|null $appointmentId
	 * @return object
	 * @throws GuzzleException
	 */
	public function videoToken(int $appointmentId = NULL): object
	{
		return $this->call('GET', "appointment/api/appointments/{$appointmentId}/video-token");
	}

	/**
	 * @return array
	 * @throws GuzzleException
	 */
	public function videoAvailability(): array
	{
		return $this->call('GET', "appointment/api/appointments/video/availability");
	}

	/**
	 * Parse props to array
	 * @param Appointment $appointment
	 * @return array
	 */
	protected function toArray(Appointment $appointment): array
	{
		return [
			'appointmentId' => $appointment->getAppointmentId(),
			'dateAppointment' => $appointment->getDateAppointment(),
			'buyerId' => $appointment->getBuyerId(),
			'insuranceId' => $appointment->getInsuranceId(),
			'partnerId' => $appointment->getPartnerId(),
			'address' => $appointment->getAddress(),
			'specialtyId' => $appointment->getSpecialtyId(),
			'isInsurance' => $appointment->isInsurance(),
			'type' => $appointment->getType(),
			'timeZone' => $appointment->getTimeZone(),
			'contactCode' => $appointment->getContactCode(),
			'contactNumber' => $appointment->getContactNumber(),
			'contactEmail' => $appointment->getContactEmail(),
			'symptoms' => $appointment->getSymptoms(),
			'reason' => $appointment->getReason(),
			'gop' => $appointment->getGop(),
		];
	}
}
