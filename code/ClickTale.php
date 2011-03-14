<?php
/**
 * Class make the ClickTale php integration available in a theme template.
 *
 * @TODO: auto append and prepend to all theme teplates with the CLickTale top and bottom code rather than having to manually add it to .ss templates 
 * 
 * @TODO: Write some tests... 
 */
class ClickTale extends DataObjectDecorator{
	/**
	 * Include ClickTale top 
	 */
	public function ClickTaleTop(){
		require "../clicktale/lib/ClickTaleTop.php";
		
		}
	/**
	 * Include ClickTale Bottom
	 */	
	public function ClickTaleBottom(){
		require "../clicktale/lib/ClickTaleBottom.php";
		
		
		}
		
		
        
        }
		?>