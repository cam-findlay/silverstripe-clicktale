<?
/**
 * Decorates the Page object to allow for ClickTale Tracking.
 * @TODO Extend the SiteConfig and add a global ClickTale on ALL pages checkbox.
 */
class ClickTaleTrack extends DataObjectDecorator{
/**
 * Add a boolean to keep track of which pages are to be tracked in ClickTale
 */
function extraStatics() {
		return array(
			'db' => array(
				'ClickTaleTrack' => 'Boolean',
			),
		);
	}
	
	
	/**
	 * We can now turn it on and off per page in the CMS!
	 * @param $fields
	 */
	function updateCMSFields(FieldSet &$fields) {
		
		$fields->addFieldToTab('Root.Content.ClickTale', new CheckBoxField("ClickTaleTrack","Track this page in ClickTale")); 
		
	}
	
	
	

}
