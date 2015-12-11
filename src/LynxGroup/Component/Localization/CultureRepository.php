<?php namespace LynxGroup\Component\Localization;

use LynxGroup\Component\Odm\Repository;

class CultureRepository extends Repository
{
	public function getLiveLocales($fallback)
	{
		$locales = [];

		foreach( $this->query()->where('published', true)->except('locale', $fallback) as $culture )
		{
			$locales[] = $culture->getLocale();
		}

		return $locales;
	}

	public function isLiveLocales($locale, $fallback)
	{
		return in_array($locale, $this->getLiveLocales($fallback));
	}
}
