<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * System configuration
 */
$GLOBALS['TL_DCA']['tl_settings'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'File',
		'closed'                      => true
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('useSMTP'),
		'default'                     => '{title_legend},websiteTitle;{date_legend},dateFormat,timeFormat,datimFormat,timeZone;{global_legend:hide},adminEmail,characterSet,minifyMarkup,gzipScripts,maintenanceMode;{backend_legend:hide},resultsPerPage,maxResultsPerPage,fileSyncExclude,doNotCollapse,staticFiles,staticPlugins;{frontend_legend},cacheMode,useAutoItem,folderUrl,doNotRedirectEmpty;{proxy_legend:hide},sslProxyDomain;{privacy_legend:hide},privacyAnonymizeIp,privacyAnonymizeGA;{security_legend},allowedTags,disableRefererCheck,disableIpCheck;{files_legend:hide},allowedDownload,validImageTypes,editableFiles,templateFiles,maxImageWidth,jpgQuality,gdMaxImgWidth,gdMaxImgHeight;{uploads_legend:hide},uploadTypes,maxFileSize,imageWidth,imageHeight;{search_legend:hide},enableSearch,indexProtected;{smtp_legend:hide},useSMTP;{cron_legend:hide},disableCron;{timeout_legend:hide},undoPeriod,versionPeriod,logPeriod,sessionTimeout,autologin,lockPeriod;{chmod_legend:hide},defaultUser,defaultGroup,defaultChmod;{update_legend:hide},liveUpdateBase'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'useSMTP'                     => 'smtpHost,smtpUser,smtpPass,smtpEnc,smtpPort'
	),

	// Fields
	'fields' => array
	(
		'websiteTitle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true)
		),
		'dateFormat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['dateFormat'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'helpwizard'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'explanation'             => 'dateFormat'
		),
		'timeFormat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['timeFormat'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50')
		),
		'datimFormat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['datimFormat'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50')
		),
		'timeZone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['timeZone'],
			'inputType'               => 'select',
			'options'                 => System::getTimeZones(),
			'eval'                    => array('chosen'=>true, 'tl_class'=>'w50')
		),
		'adminEmail' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['adminEmail'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'friendly', 'decodeEntities'=>true, 'tl_class'=>'w50')
		),
		'characterSet' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['characterSet'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'alnum', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'disableCron' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['disableCron'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'minifyMarkup' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'gzipScripts' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'resultsPerPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'minval'=>1, 'nospace'=>true, 'tl_class'=>'w50')
		),
		'maxResultsPerPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'staticFiles' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['staticFiles'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'trailingSlash'=>false, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_settings', 'checkStaticUrl')
			)
		),
		'staticPlugins' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['staticPlugins'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'trailingSlash'=>false, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_settings', 'checkStaticUrl')
			)
		),
		'fileSyncExclude' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'],
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50')
		),
		'doNotCollapse' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12')
		),
		'doNotRedirectEmpty' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'useAutoItem' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12')
		),
		'folderUrl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['folderUrl'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'sslProxyDomain' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['sslProxyDomain'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'tl_class'=>'w50')
		),
		'cacheMode' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['cacheMode'],
			'inputType'               => 'select',
			'options'                 => array('both', 'server', 'browser', 'none'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_settings'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'privacyAnonymizeIp' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'privacyAnonymizeGA' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'disableRefererCheck' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'allowedTags' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['allowedTags'],
			'inputType'               => 'text',
			'eval'                    => array('preserveTags'=>true, 'tl_class'=>'long')
		),
		'maintenanceMode' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['maintenanceMode'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'disableIpCheck' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'allowedDownload' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'],
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50')
		),
		'validImageTypes' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'],
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50')
		),
		'editableFiles' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['editableFiles'],
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50')
		),
		'templateFiles' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['templateFiles'],
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_settings', 'checkTemplateFiles')
			)
		),
		'maxImageWidth' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'jpgQuality' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'prcnt', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'gdMaxImgWidth' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'gdMaxImgHeight' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'uploadTypes' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'],
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50')
		),
		'maxFileSize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'imageWidth' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['imageWidth'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'imageHeight' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['imageHeight'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'enableSearch' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['enableSearch'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'indexProtected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['indexProtected'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_settings', 'clearSearchIndex')
			)
		),
		'useSMTP' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['useSMTP'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
		'smtpHost' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['smtpHost'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'long')
		),
		'smtpUser' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['smtpUser'],
			'inputType'               => 'text',
			'eval'                    => array('decodeEntities'=>true, 'tl_class'=>'w50')
		),
		'smtpPass' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['smtpPass'],
			'inputType'               => 'textStore',
			'eval'                    => array('decodeEntities'=>true, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_settings', 'storeSmtpPass')
			)
		),
		'smtpEnc' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'],
			'inputType'               => 'select',
			'options'                 => array(''=>'-', 'ssl'=>'SSL', 'tls'=>'TLS'),
			'eval'                    => array('tl_class'=>'w50')
		),
		'smtpPort' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['smtpPort'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'undoPeriod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'versionPeriod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'logPeriod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['logPeriod'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'sessionTimeout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'autologin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['autologin'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'lockPeriod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
		),
		'defaultUser' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['defaultUser'],
			'inputType'               => 'select',
			'foreignKey'              => 'tl_user.username',
			'eval'                    => array('chosen'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50')
		),
		'defaultGroup' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'],
			'inputType'               => 'select',
			'foreignKey'              => 'tl_user_group.name',
			'eval'                    => array('chosen'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50')
		),
		'defaultChmod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'],
			'inputType'               => 'chmod',
			'eval'                    => array('tl_class'=>'clr')
		),
		'liveUpdateBase' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'],
			'inputType'               => 'text'
		)
	)
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_settings extends Backend
{

	/**
	 * Remove protected search results if the feature is being disabled
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function clearSearchIndex($varValue)
	{
		if (!$varValue)
		{
			$this->Database->execute("DELETE FROM tl_search WHERE protected=1");
		}

		return $varValue;
	}


	/**
	 * Store the unfiltered SMTP password
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 */
	public function storeSmtpPass($varValue, DataContainer $dc)
	{
		if (isset($_POST[$dc->field]))
		{
			return Input::postUnsafeRaw($dc->field);
		}

		return $varValue;
	}


	/**
	 * Make sure that "html5" is in the list of valid template files, so the back end works correctly (see #3398)
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function checkTemplateFiles($varValue)
	{
		if (strpos($varValue, 'html5') === false)
		{
			$varValue .= (($varValue != '') ? ',' : '') . 'html5';
		}

		return $varValue;
	}


	/**
	 * Check a static URL
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function checkStaticUrl($varValue)
	{
		if ($varValue != '')
		{
			$varValue = preg_replace('@https?://@', '', $varValue);
		}

		return $varValue;
	}
}
