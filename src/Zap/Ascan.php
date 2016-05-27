<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2016 the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Zap;


/**
 * This file was automatically generated.
 */
class Ascan {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	public function status($scanid=NULL) {
		$params = array();
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/view/status/', $params);
		return reset($res);
	}

	public function scanProgress($scanid=NULL) {
		$params = array();
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/view/scanProgress/', $params);
		return reset($res);
	}

	public function messagesIds($scanid) {
		$res = $this->zap->request($this->zap->base . 'ascan/view/messagesIds/', array('scanId' => $scanid));
		return reset($res);
	}

	public function alertsIds($scanid) {
		$res = $this->zap->request($this->zap->base . 'ascan/view/alertsIds/', array('scanId' => $scanid));
		return reset($res);
	}

	public function scans() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/scans/');
		return reset($res);
	}

	public function scanPolicyNames() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/scanPolicyNames/');
		return reset($res);
	}

	public function excludedFromScan() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/excludedFromScan/');
		return reset($res);
	}

	public function scanners($scanpolicyname=NULL, $policyid=NULL) {
		$params = array();
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($policyid !== NULL) {
			$params['policyId'] = $policyid;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/view/scanners/', $params);
		return reset($res);
	}

	public function policies($scanpolicyname=NULL, $policyid=NULL) {
		$params = array();
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($policyid !== NULL) {
			$params['policyId'] = $policyid;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/view/policies/', $params);
		return reset($res);
	}

	public function attackModeQueue() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/attackModeQueue/');
		return reset($res);
	}

	public function optionAttackPolicy() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionAttackPolicy/');
		return reset($res);
	}

	public function optionDefaultPolicy() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionDefaultPolicy/');
		return reset($res);
	}

	public function optionDelayInMs() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionDelayInMs/');
		return reset($res);
	}

	public function optionExcludedParamList() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionExcludedParamList/');
		return reset($res);
	}

	public function optionHandleAntiCSRFTokens() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionHandleAntiCSRFTokens/');
		return reset($res);
	}

	public function optionHostPerScan() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionHostPerScan/');
		return reset($res);
	}

	public function optionMaxChartTimeInMins() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionMaxChartTimeInMins/');
		return reset($res);
	}

	public function optionMaxResultsToList() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionMaxResultsToList/');
		return reset($res);
	}

	public function optionMaxScansInUI() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionMaxScansInUI/');
		return reset($res);
	}

	public function optionTargetParamsEnabledRPC() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionTargetParamsEnabledRPC/');
		return reset($res);
	}

	public function optionTargetParamsInjectable() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionTargetParamsInjectable/');
		return reset($res);
	}

	public function optionThreadPerHost() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionThreadPerHost/');
		return reset($res);
	}

	public function optionAllowAttackOnStart() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionAllowAttackOnStart/');
		return reset($res);
	}

	public function optionInjectPluginIdInHeader() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionInjectPluginIdInHeader/');
		return reset($res);
	}

	public function optionPromptInAttackMode() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionPromptInAttackMode/');
		return reset($res);
	}

	public function optionPromptToClearFinishedScans() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionPromptToClearFinishedScans/');
		return reset($res);
	}

	public function optionRescanInAttackMode() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionRescanInAttackMode/');
		return reset($res);
	}

	public function optionShowAdvancedDialog() {
		$res = $this->zap->request($this->zap->base . 'ascan/view/optionShowAdvancedDialog/');
		return reset($res);
	}

	public function scan($url, $recurse=NULL, $inscopeonly=NULL, $scanpolicyname=NULL, $method=NULL, $postdata=NULL, $apikey='') {
		$params = array('url' => $url, 'apikey' => $apikey);
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($inscopeonly !== NULL) {
			$params['inScopeOnly'] = $inscopeonly;
		}
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/scan/', $params);
		return reset($res);
	}

	/**
	 * Active Scans from the perspective of a User, obtained using the given Context ID and User ID. See 'scan' action for more details.
	 */
	public function scanAsUser($url, $contextid, $userid, $recurse=NULL, $scanpolicyname=NULL, $method=NULL, $postdata=NULL, $apikey='') {
		$params = array('url' => $url, 'contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey);
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/scanAsUser/', $params);
		return reset($res);
	}

	public function pause($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/pause/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function resume($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/resume/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function stop($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/stop/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function removeScan($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/removeScan/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function pauseAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/pauseAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function resumeAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/resumeAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function stopAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/stopAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function removeAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/removeAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function clearExcludedFromScan($apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/clearExcludedFromScan/', array('apikey' => $apikey));
		return reset($res);
	}

	public function excludeFromScan($regex, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/excludeFromScan/', array('regex' => $regex, 'apikey' => $apikey));
		return reset($res);
	}

	public function enableAllScanners($scanpolicyname=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/enableAllScanners/', $params);
		return reset($res);
	}

	public function disableAllScanners($scanpolicyname=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/disableAllScanners/', $params);
		return reset($res);
	}

	public function enableScanners($ids, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/enableScanners/', array('ids' => $ids, 'apikey' => $apikey));
		return reset($res);
	}

	public function disableScanners($ids, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/disableScanners/', array('ids' => $ids, 'apikey' => $apikey));
		return reset($res);
	}

	public function setEnabledPolicies($ids, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setEnabledPolicies/', array('ids' => $ids, 'apikey' => $apikey));
		return reset($res);
	}

	public function setPolicyAttackStrength($id, $attackstrength, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'attackStrength' => $attackstrength, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/setPolicyAttackStrength/', $params);
		return reset($res);
	}

	public function setPolicyAlertThreshold($id, $alertthreshold, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'alertThreshold' => $alertthreshold, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/setPolicyAlertThreshold/', $params);
		return reset($res);
	}

	public function setScannerAttackStrength($id, $attackstrength, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'attackStrength' => $attackstrength, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/setScannerAttackStrength/', $params);
		return reset($res);
	}

	public function setScannerAlertThreshold($id, $alertthreshold, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'alertThreshold' => $alertthreshold, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->base . 'ascan/action/setScannerAlertThreshold/', $params);
		return reset($res);
	}

	public function addScanPolicy($scanpolicyname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/addScanPolicy/', array('scanPolicyName' => $scanpolicyname, 'apikey' => $apikey));
		return reset($res);
	}

	public function removeScanPolicy($scanpolicyname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/removeScanPolicy/', array('scanPolicyName' => $scanpolicyname, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionAttackPolicy($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionAttackPolicy/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionDefaultPolicy($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionDefaultPolicy/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionAllowAttackOnStart($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionAllowAttackOnStart/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionDelayInMs($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionDelayInMs/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionHandleAntiCSRFTokens($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionHandleAntiCSRFTokens/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionHostPerScan($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionHostPerScan/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionInjectPluginIdInHeader($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionInjectPluginIdInHeader/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionMaxChartTimeInMins($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxChartTimeInMins/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionMaxResultsToList($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxResultsToList/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionMaxScansInUI($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxScansInUI/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionPromptInAttackMode($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionPromptInAttackMode/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionPromptToClearFinishedScans($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionPromptToClearFinishedScans/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionRescanInAttackMode($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionRescanInAttackMode/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionShowAdvancedDialog($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionShowAdvancedDialog/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionTargetParamsEnabledRPC($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionTargetParamsEnabledRPC/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionTargetParamsInjectable($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionTargetParamsInjectable/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionThreadPerHost($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'ascan/action/setOptionThreadPerHost/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

}
