<?php
/**
 * @file classes/handler/HandlerValidatorRoles.inc.php
 *
 * Copyright (c) 2003-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class HandlerValidator
 * @ingroup security
 *
 * @brief Class to represent a page validation check.
 *
 * NB: Deprecated - please use HandlerOperationRolesPolicy instead.
 */

import('lib.pkp.classes.handler.validation.HandlerValidatorPolicy');
import('lib.pkp.classes.security.authorization.HandlerOperationRolesPolicy');

class HandlerValidatorRoles extends HandlerValidatorPolicy {
	/**
	 * Constructor.
	 * @param $handler Handler the associated form
	 * @param $roles array of role id's
	 * @param $all bool flag for whether all roles must exist or just 1
	 */
	function HandlerValidatorRoles(&$handler, $redirectLogin = true, $message = null, $additionalArgs = array(), $roles, $all = false) {
		$application =& PKPApplication::getApplication();
		$request =& $application->getRequest();
		$policy = new HandlerOperationRolesPolicy($request, $roles, $message, array(), $all);
		parent::HandlerValidatorPolicy($policy, $handler, $redirectLogin, $message, $additionalArgs);
	}
}

?>
