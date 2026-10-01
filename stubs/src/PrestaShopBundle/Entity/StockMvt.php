<?php

namespace PrestaShopBundle\Entity;

/**
 * StockMvt.
 *
 * @ORM\Table(indexes={@ORM\Index(name="id_stock", columns={"id_stock"}), @ORM\Index(name="id_stock_mvt_reason", columns={"id_stock_mvt_reason"})})
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\StockMovementRepository")
 */
class StockMvt
{
    public function __construct()
    {
    }
    public function getIdStockMvt(): int
    {
    }
    public function setIdStock(int $idStock): static
    {
    }
    public function getIdStock(): int
    {
    }
    public function setIdOrder(?int $idOrder): static
    {
    }
    public function getIdOrder(): ?int
    {
    }
    public function setIdSupplyOrder(?int $idSupplyOrder): static
    {
    }
    public function getIdSupplyOrder(): ?int
    {
    }
    public function setIdStockMvtReason(int $idStockMvtReason): static
    {
    }
    public function getIdStockMvtReason(): int
    {
    }
    public function setIdEmployee(int $idEmployee): static
    {
    }
    public function getIdEmployee(): int
    {
    }
    public function setEmployeeLastname(?string $employeeLastname): static
    {
    }
    public function getEmployeeLastname(): ?string
    {
    }
    public function setEmployeeFirstname(?string $employeeFirstname): static
    {
    }
    public function getEmployeeFirstname(): ?string
    {
    }
    public function setPhysicalQuantity(int $physicalQuantity): static
    {
    }
    public function getPhysicalQuantity(): int
    {
    }
    public function setDateAdd(\DateTime $dateAdd): static
    {
    }
    public function getDateAdd(): \DateTime
    {
    }
    public function setSign(int $sign): static
    {
    }
    public function getSign(): int
    {
    }
    public function setPriceTe(?string $priceTe): static
    {
    }
    public function getPriceTe(): ?string
    {
    }
    public function setLastWa(?string $lastWa): static
    {
    }
    public function getLastWa(): ?string
    {
    }
    public function setCurrentWa(?string $currentWa): static
    {
    }
    public function getCurrentWa(): ?string
    {
    }
    public function setReferer(?int $referer): static
    {
    }
    public function getReferer(): ?int
    {
    }
}
