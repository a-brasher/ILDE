<?php
/*********************************************************************************
 * LdShake is a platform for the social sharing and co-edition of learning designs
 * Copyright (C) 2009-2012, Universitat Pompeu Fabra, Barcelona.
 *
 * (Contributors, alpha. order) Abenia, P., Carralero, M.A., Chacón, J., Hernández-Leo, D., Moreno, P.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY Universitat Pompeu Fabra (UPF), Barcelona,
 * UPF DISCLAIMS THE WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses.
 *
 * You can contact the Interactive Technologies Group (GTI), Universitat Pompeu Fabra, Barcelona.
 * headquarters at c/Roc Boronat 138, Barcelona, or at email address davinia.hernandez@upf.edu
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * LdShake" logo with a link to the website http://ldshake.upf.edu.
 * If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by LdShake" with the link to the website http://ldshake.upf.edu.
 ********************************************************************************/

/**
 * Set of helper functions for the views of the LdShakers module 
 *
 */

class ldshakers_viewTools
{	
	public static function pagination ($count, $elementsPerPage = 25)
	{
		$params = array(
			'baseurl' => 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'],
			'offset' => get_input('offset') ?: 0,
			'count' => $count,
			'limit' => $elementsPerPage
		);
		
		return elgg_view('navigation/pagination', $params);
	}
	
	public static function getUrl ($type = '')
	{
		global $CONFIG;
		
		switch ($type)
		{
			case '':
				return $CONFIG->url . 'pg/ldshakers/';
		}
	}
	
	public static function urlFor ($item, $type)
	{
		global $CONFIG;
		
		switch ($type)
		{
			case 'group':
				return $CONFIG->url . 'pg/ldshakers/group/'.$item->id.'/' ;
			case 'user':
				return $CONFIG->url . 'pg/ldshakers/'.$item->username.'/' ;
		}
	}
	
	public static function getGroupList ($userId)
	{
		$groups = ldshakers_contTools::getGroupsUserIsMember($userId);
		
		$str = '';
		foreach ($groups as $g)
		{
			$str .= '<a href="'.self::urlFor($g, 'group').'">'.$g->name.'</a> ';
		}
		return $str;
	}
}