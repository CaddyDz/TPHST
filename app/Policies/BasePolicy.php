<?php

declare(strict_types=1);

namespace TPHST\Policies;

use TPHST\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BasePolicy
{
	use HandlesAuthorization;
	/**
	 * Determine whether the user can view any posts.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function viewAny(User $user)
	{
		return isAdmin($user);
	}

	public function before($user)
	{
		return isAdmin($user);
	}

	/**
	 * Determine whether the user can view the model.
	 *
	 * @param  \TPHST\User  $user
	 * @return mixed
	 */
	public function view(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can create categories.
	 *
	 * @param  \TPHST\User  $user
	 * @return mixed
	 */
	public function create(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param  \TPHST\User  $user
	 * @return mixed
	 */
	public function update(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param  \TPHST\User  $user
	 * @return mixed
	 */
	public function delete(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param  \TPHST\User  $user
	 * @return mixed
	 */
	public function restore(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param  \TPHST\User  $user
	 * @return mixed
	 */
	public function forceDelete(User $user)
	{
		//
	}
}
