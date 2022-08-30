<?php

class BoilerplateAdminView extends Boilerplate
{
	/**
	 * @var array 관리자 상단 메뉴
	 */
	protected static $_menus = [
		// [ string $menu_lang_key, [ string $act, string ...$sub_act ], (bool) $visibility = true ]
		[ 'boilerplate_admin_menu_index', [ 'dispBoilerplateAdminIndex' ] ]
	];

	/**
	 * 초기화 시 호출됩니다.
	 * 
	 * @return void
	 */
	public function init()
	{
		Context::set('menus', self::$_menus);
		$this->setTemplatePath(__DIR__ . '/tpl');
	}

	/**
	 * 메뉴를 보이지 않게 설정합니다.
	 * 
	 * @param int $menu_index
	 * @return bool
	 */
	private function setMenuInvisible(int $menu_index): bool
	{
		if(!isset(self::$_menus[$menu_index]))
		{
			return false;
		}
		
		self::$_menus[$menu_index][2] = false;
		return true;
	}

	/**
	 * 대시보드 역할을 하는 메인 메뉴입니다.
	 * 
	 * @return void
	 */
	public function dispBoilerplateAdminIndex()
	{
		$oAdminModel = $this->getAdminModel();
		
		$current_version = $oAdminModel->getCurrentVersion();
		Context::set('current_version', $current_version);
		
		$github_version = $oAdminModel->getGithubVersion();
		Context::set('github_version', $github_version);
		
		$is_github_updated = version_compare($current_version, $github_version, '>=');
		Context::set('is_github_updated', $is_github_updated);
		
		$github_url = $oAdminModel->getGithubUrl();
		Context::set('github_url', $github_url);
		
		$this->setTemplateFile('index');
	}
}
