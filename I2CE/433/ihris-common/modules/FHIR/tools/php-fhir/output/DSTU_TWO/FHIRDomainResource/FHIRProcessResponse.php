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
 * This resource provides processing status, errors and notes from the processing of a resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcessResponse extends FHIRDomainResource implements JsonSerializable
{
    /**
     * The Response business identifier.
     * @var \DSTU_TWO\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Original request resource reference.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Transaction status: error, complete, held.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $outcome = null;

    /**
     * A description of the status of the adjudication or processing.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $ruleset = null;

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The organization who produced this adjudicated response.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $requestProvider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $requestOrganization = null;

    /**
     * The form to be used for printing the content.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $form = null;

    /**
     * Suite of processing note or additional requirements is the processing has been held.
     * @var \DSTU_TWO\FHIRResource\FHIRProcessResponse\FHIRProcessResponseNotes[]
     */
    public $notes = array();

    /**
     * Processing errors.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding[]
     */
    public $error = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ProcessResponse';

    /**
     * The Response business identifier.
     * @return \DSTU_TWO\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
     * @param \DSTU_TWO\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Original request resource reference.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Original request resource reference.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Transaction status: error, complete, held.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Transaction status: error, complete, held.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A description of the status of the adjudication or processing.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A description of the status of the adjudication or processing.
     * @param \DSTU_TWO\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $ruleset
     * @return $this
     */
    public function setRuleset($ruleset)
    {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $originalRuleset
     * @return $this
     */
    public function setOriginalRuleset($originalRuleset)
    {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @return \DSTU_TWO\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param \DSTU_TWO\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * The organization who produced this adjudicated response.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The organization who produced this adjudicated response.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getRequestProvider()
    {
        return $this->requestProvider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $requestProvider
     * @return $this
     */
    public function setRequestProvider($requestProvider)
    {
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getRequestOrganization()
    {
        return $this->requestOrganization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $requestOrganization
     * @return $this
     */
    public function setRequestOrganization($requestOrganization)
    {
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * The form to be used for printing the content.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $form
     * @return $this
     */
    public function setForm($form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Suite of processing note or additional requirements is the processing has been held.
     * @return \DSTU_TWO\FHIRResource\FHIRProcessResponse\FHIRProcessResponseNotes[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Suite of processing note or additional requirements is the processing has been held.
     * @param \DSTU_TWO\FHIRResource\FHIRProcessResponse\FHIRProcessResponseNotes[] $notes
     * @return $this
     */
    public function addNotes($notes)
    {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * Processing errors.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Processing errors.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding[] $error
     * @return $this
     */
    public function addError($error)
    {
        $this->error[] = $error;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->request) $json['request'] = $this->request->jsonSerialize();
        if (null !== $this->outcome) $json['outcome'] = $this->outcome->jsonSerialize();
        if (null !== $this->disposition) $json['disposition'] = $this->disposition->jsonSerialize();
        if (null !== $this->ruleset) $json['ruleset'] = $this->ruleset->jsonSerialize();
        if (null !== $this->originalRuleset) $json['originalRuleset'] = $this->originalRuleset->jsonSerialize();
        if (null !== $this->created) $json['created'] = $this->created->jsonSerialize();
        if (null !== $this->organization) $json['organization'] = $this->organization->jsonSerialize();
        if (null !== $this->requestProvider) $json['requestProvider'] = $this->requestProvider->jsonSerialize();
        if (null !== $this->requestOrganization) $json['requestOrganization'] = $this->requestOrganization->jsonSerialize();
        if (null !== $this->form) $json['form'] = $this->form->jsonSerialize();
        if (0 < count($this->notes)) {
            $json['notes'] = array();
            foreach($this->notes as $notes) {
                $json['notes'][] = $notes->jsonSerialize();
            }
        }
        if (0 < count($this->error)) {
            $json['error'] = array();
            foreach($this->error as $error) {
                $json['error'][] = $error->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProcessResponse xmlns="http://hl7.org/fhir"></ProcessResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (null !== $this->disposition) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (null !== $this->ruleset) $this->ruleset->xmlSerialize(true, $sxe->addChild('ruleset'));
        if (null !== $this->originalRuleset) $this->originalRuleset->xmlSerialize(true, $sxe->addChild('originalRuleset'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->organization) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (null !== $this->requestProvider) $this->requestProvider->xmlSerialize(true, $sxe->addChild('requestProvider'));
        if (null !== $this->requestOrganization) $this->requestOrganization->xmlSerialize(true, $sxe->addChild('requestOrganization'));
        if (null !== $this->form) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->notes)) {
            foreach($this->notes as $notes) {
                $notes->xmlSerialize(true, $sxe->addChild('notes'));
            }
        }
        if (0 < count($this->error)) {
            foreach($this->error as $error) {
                $error->xmlSerialize(true, $sxe->addChild('error'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}