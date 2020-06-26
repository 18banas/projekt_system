<?php
/**
 * Contact service.
 */

namespace App\Service;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class ContactService.
 */
class ContactService
{
    /**
     * Contact repository.
     *
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * Paginator.
     *
     * @var PaginatorInterface
     */
    private $paginator;

    /**
     * ContactService constructor.
     *
     * @param ContactRepository  $contactRepository Contact repository
     * @param PaginatorInterface $paginator         Paginator
     */
    public function __construct(ContactRepository $contactRepository, PaginatorInterface $paginator)
    {
        $this->contactRepository = $contactRepository;
        $this->paginator = $paginator;
    }

    /**
     * Create paginated list.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface Paginated list
     */
    public function createPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->contactRepository->queryAll(),
            $page,
            ContactRepository::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    /**
     * Save contact.
     *
     * @param Contact $contact Contact entity
     *
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function save(Contact $contact): void
    {
        $this->contactRepository->save($contact);
    }

    /**
     * Delete contact.
     *
     * @param Contact $contact Contact entity
     *
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Contact $contact): void
    {
        $this->contactRepository->delete($contact);
    }
}
