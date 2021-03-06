<?php namespace DSTU_TWO\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 13th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DSTU_TWO\FHIRResource\FHIRDomainResource;
use DSTU_TWO\JsonSerializable;

/**
 * A record of a device being used by a patient where the record is the result of a report from the patient or another clinician.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceUseStatement extends FHIRDomainResource implements JsonSerializable
{
    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRCodeableConcept
     */
    public $bodySiteCodeableConcept = null;

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $bodySiteReference = null;

    /**
     * The time period over which the device was used.
     * @var \DSTU_TWO\FHIRElement\FHIRPeriod
     */
    public $whenUsed = null;

    /**
     * The details of the device used.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * An external identifier for this statement such as an IRI.
     * @var \DSTU_TWO\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Reason or justification for the use of the device.
     * @var \DSTU_TWO\FHIRElement\FHIRCodeableConcept[]
     */
    public $indication = array();

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \DSTU_TWO\FHIRElement\FHIRString[]
     */
    public $notes = array();

    /**
     * The time at which the statement was made/recorded.
     * @var \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public $recordedOn = null;

    /**
     * The patient who used the device.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceUseStatement';

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySiteCodeableConcept()
    {
        return $this->bodySiteCodeableConcept;
    }

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRCodeableConcept $bodySiteCodeableConcept
     * @return $this
     */
    public function setBodySiteCodeableConcept($bodySiteCodeableConcept)
    {
        $this->bodySiteCodeableConcept = $bodySiteCodeableConcept;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getBodySiteReference()
    {
        return $this->bodySiteReference;
    }

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site). (choose any one of bodySite*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRReference $bodySiteReference
     * @return $this
     */
    public function setBodySiteReference($bodySiteReference)
    {
        $this->bodySiteReference = $bodySiteReference;
        return $this;
    }

    /**
     * The time period over which the device was used.
     * @return \DSTU_TWO\FHIRElement\FHIRPeriod
     */
    public function getWhenUsed()
    {
        return $this->whenUsed;
    }

    /**
     * The time period over which the device was used.
     * @param \DSTU_TWO\FHIRElement\FHIRPeriod $whenUsed
     * @return $this
     */
    public function setWhenUsed($whenUsed)
    {
        $this->whenUsed = $whenUsed;
        return $this;
    }

    /**
     * The details of the device used.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The details of the device used.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * An external identifier for this statement such as an IRI.
     * @return \DSTU_TWO\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An external identifier for this statement such as an IRI.
     * @param \DSTU_TWO\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Reason or justification for the use of the device.
     * @return \DSTU_TWO\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Reason or justification for the use of the device.
     * @param \DSTU_TWO\FHIRElement\FHIRCodeableConcept[] $indication
     * @return $this
     */
    public function addIndication($indication)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return \DSTU_TWO\FHIRElement\FHIRString[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param \DSTU_TWO\FHIRElement\FHIRString[] $notes
     * @return $this
     */
    public function addNotes($notes)
    {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * The time at which the statement was made/recorded.
     * @return \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }

    /**
     * The time at which the statement was made/recorded.
     * @param \DSTU_TWO\FHIRElement\FHIRDateTime $recordedOn
     * @return $this
     */
    public function setRecordedOn($recordedOn)
    {
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * The patient who used the device.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient who used the device.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->bodySiteCodeableConcept) $json['bodySiteCodeableConcept'] = $this->bodySiteCodeableConcept->jsonSerialize();
        if (null !== $this->bodySiteReference) $json['bodySiteReference'] = $this->bodySiteReference->jsonSerialize();
        if (null !== $this->whenUsed) $json['whenUsed'] = $this->whenUsed->jsonSerialize();
        if (null !== $this->device) $json['device'] = $this->device->jsonSerialize();
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (0 < count($this->indication)) {
            $json['indication'] = array();
            foreach($this->indication as $indication) {
                $json['indication'][] = $indication->jsonSerialize();
            }
        }
        if (0 < count($this->notes)) {
            $json['notes'] = array();
            foreach($this->notes as $notes) {
                $json['notes'][] = $notes->jsonSerialize();
            }
        }
        if (null !== $this->recordedOn) $json['recordedOn'] = $this->recordedOn->jsonSerialize();
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->timingTiming) $json['timingTiming'] = $this->timingTiming->jsonSerialize();
        if (null !== $this->timingPeriod) $json['timingPeriod'] = $this->timingPeriod->jsonSerialize();
        if (null !== $this->timingDateTime) $json['timingDateTime'] = $this->timingDateTime->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceUseStatement xmlns="http://hl7.org/fhir"></DeviceUseStatement>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->bodySiteCodeableConcept) $this->bodySiteCodeableConcept->xmlSerialize(true, $sxe->addChild('bodySiteCodeableConcept'));
        if (null !== $this->bodySiteReference) $this->bodySiteReference->xmlSerialize(true, $sxe->addChild('bodySiteReference'));
        if (null !== $this->whenUsed) $this->whenUsed->xmlSerialize(true, $sxe->addChild('whenUsed'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (0 < count($this->notes)) {
            foreach($this->notes as $notes) {
                $notes->xmlSerialize(true, $sxe->addChild('notes'));
            }
        }
        if (null !== $this->recordedOn) $this->recordedOn->xmlSerialize(true, $sxe->addChild('recordedOn'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->timingTiming) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingDateTime) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}