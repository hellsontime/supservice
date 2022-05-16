<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ticket")
 * @ORM\HasLifecycleCallbacks()
 */
class Ticket implements \JsonSerializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $ticket_id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $support_id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private string $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $create_date;

    /**
     * @return int
     */
    public function getTicketId(): int
    {
        return $this->ticket_id;
    }

    /**
     * @param int $ticket_id
     */
    public function setTicketId(int $ticket_id): void
    {
        $this->ticket_id = $ticket_id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getSupportId(): int
    {
        return $this->support_id;
    }

    /**
     * @param int $support_id
     */
    public function setSupportId(int $support_id): void
    {
        $this->support_id = $support_id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate(): \DateTime
    {
        return $this->create_date;
    }

    /**
     * @param \DateTime $create_date
     * @return Ticket
     */
    public function setCreateDate(\DateTime $create_date): self
    {
        $this->create_date = $create_date;
        return $this;
    }

    /**
     * @throws \Exception
     * @ORM\PrePersist()
     */
    public function beforeSave(): void
    {
        $this->create_date = new \DateTime('now', new \DateTimeZone('Europe/Minsk'));
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return array data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize(): array
    {
        return [
            "ticket_id" => $this->getTicketId(),
            "user_id" => $this->getUserId(),
            "support_id" => $this->getSupportId(),
            "status" => $this->getStatus(),
            "create_date" => $this->getCreateDate(),
        ];
    }
}