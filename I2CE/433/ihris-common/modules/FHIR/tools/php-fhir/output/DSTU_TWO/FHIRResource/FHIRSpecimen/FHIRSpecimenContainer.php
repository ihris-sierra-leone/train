<?php namespace DSTU_TWO\FHIRResource\FHIRSpecimen;

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

use DSTU_TWO\FHIRElement\FHIRBackboneElement;
use DSTU_TWO\JsonSerializable;

/**
 * A sample to be used for analysis.
 */
class FHIRSpecimenContainer extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
     * @var \DSTU_TWO\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Textual description of the container.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The type of container associated with the specimen (e.g. slide, aliquot, etc.).
     * @var \DSTU_TWO\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The capacity (volume or other measure) the container may contain.
     * @var \DSTU_TWO\FHIRSimpleQuantity
     */
    public $capacity = null;

    /**
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     * @var \DSTU_TWO\FHIRSimpleQuantity
     */
    public $specimenQuantity = null;

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRCodeableConcept
     */
    public $additiveCodeableConcept = null;

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $additiveReference = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Specimen.Container';

    /**
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
     * @return \DSTU_TWO\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
     * @param \DSTU_TWO\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Textual description of the container.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Textual description of the container.
     * @param \DSTU_TWO\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The type of container associated with the specimen (e.g. slide, aliquot, etc.).
     * @return \DSTU_TWO\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of container associated with the specimen (e.g. slide, aliquot, etc.).
     * @param \DSTU_TWO\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The capacity (volume or other measure) the container may contain.
     * @return \DSTU_TWO\FHIRSimpleQuantity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * The capacity (volume or other measure) the container may contain.
     * @param \DSTU_TWO\FHIRSimpleQuantity $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     * @return \DSTU_TWO\FHIRSimpleQuantity
     */
    public function getSpecimenQuantity()
    {
        return $this->specimenQuantity;
    }

    /**
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     * @param \DSTU_TWO\FHIRSimpleQuantity $specimenQuantity
     * @return $this
     */
    public function setSpecimenQuantity($specimenQuantity)
    {
        $this->specimenQuantity = $specimenQuantity;
        return $this;
    }

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditiveCodeableConcept()
    {
        return $this->additiveCodeableConcept;
    }

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRCodeableConcept $additiveCodeableConcept
     * @return $this
     */
    public function setAdditiveCodeableConcept($additiveCodeableConcept)
    {
        $this->additiveCodeableConcept = $additiveCodeableConcept;
        return $this;
    }

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getAdditiveReference()
    {
        return $this->additiveReference;
    }

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     * @param \DSTU_TWO\FHIRElement\FHIRReference $additiveReference
     * @return $this
     */
    public function setAdditiveReference($additiveReference)
    {
        $this->additiveReference = $additiveReference;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->capacity) $json['capacity'] = $this->capacity->jsonSerialize();
        if (null !== $this->specimenQuantity) $json['specimenQuantity'] = $this->specimenQuantity->jsonSerialize();
        if (null !== $this->additiveCodeableConcept) $json['additiveCodeableConcept'] = $this->additiveCodeableConcept->jsonSerialize();
        if (null !== $this->additiveReference) $json['additiveReference'] = $this->additiveReference->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenContainer xmlns="http://hl7.org/fhir"></SpecimenContainer>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->capacity) $this->capacity->xmlSerialize(true, $sxe->addChild('capacity'));
        if (null !== $this->specimenQuantity) $this->specimenQuantity->xmlSerialize(true, $sxe->addChild('specimenQuantity'));
        if (null !== $this->additiveCodeableConcept) $this->additiveCodeableConcept->xmlSerialize(true, $sxe->addChild('additiveCodeableConcept'));
        if (null !== $this->additiveReference) $this->additiveReference->xmlSerialize(true, $sxe->addChild('additiveReference'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}