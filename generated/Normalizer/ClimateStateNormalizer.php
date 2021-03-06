<?php

namespace Tesla\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ClimateStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\ClimateState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\ClimateState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Tesla\Api\Model\ClimateState();
        if (property_exists($data, 'inside_temp') && $data->{'inside_temp'} !== null) {
            $object->setInsideTemp($data->{'inside_temp'});
        }
        elseif (property_exists($data, 'inside_temp') && $data->{'inside_temp'} === null) {
            $object->setInsideTemp(null);
        }
        if (property_exists($data, 'outside_temp') && $data->{'outside_temp'} !== null) {
            $object->setOutsideTemp($data->{'outside_temp'});
        }
        elseif (property_exists($data, 'outside_temp') && $data->{'outside_temp'} === null) {
            $object->setOutsideTemp(null);
        }
        if (property_exists($data, 'driver_temp_setting') && $data->{'driver_temp_setting'} !== null) {
            $object->setDriverTempSetting($data->{'driver_temp_setting'});
        }
        elseif (property_exists($data, 'driver_temp_setting') && $data->{'driver_temp_setting'} === null) {
            $object->setDriverTempSetting(null);
        }
        if (property_exists($data, 'passenger_temp_setting') && $data->{'passenger_temp_setting'} !== null) {
            $object->setPassengerTempSetting($data->{'passenger_temp_setting'});
        }
        elseif (property_exists($data, 'passenger_temp_setting') && $data->{'passenger_temp_setting'} === null) {
            $object->setPassengerTempSetting(null);
        }
        if (property_exists($data, 'left_temp_direction') && $data->{'left_temp_direction'} !== null) {
            $object->setLeftTempDirection($data->{'left_temp_direction'});
        }
        elseif (property_exists($data, 'left_temp_direction') && $data->{'left_temp_direction'} === null) {
            $object->setLeftTempDirection(null);
        }
        if (property_exists($data, 'right_temp_direction') && $data->{'right_temp_direction'} !== null) {
            $object->setRightTempDirection($data->{'right_temp_direction'});
        }
        elseif (property_exists($data, 'right_temp_direction') && $data->{'right_temp_direction'} === null) {
            $object->setRightTempDirection(null);
        }
        if (property_exists($data, 'is_front_defroster_on')) {
            $object->setIsFrontDefrosterOn($data->{'is_front_defroster_on'});
        }
        if (property_exists($data, 'is_rear_defroster_on')) {
            $object->setIsRearDefrosterOn($data->{'is_rear_defroster_on'});
        }
        if (property_exists($data, 'fan_status') && $data->{'fan_status'} !== null) {
            $object->setFanStatus($data->{'fan_status'});
        }
        elseif (property_exists($data, 'fan_status') && $data->{'fan_status'} === null) {
            $object->setFanStatus(null);
        }
        if (property_exists($data, 'is_climate_on')) {
            $object->setIsClimateOn($data->{'is_climate_on'});
        }
        if (property_exists($data, 'min_avail_temp') && $data->{'min_avail_temp'} !== null) {
            $object->setMinAvailTemp($data->{'min_avail_temp'});
        }
        elseif (property_exists($data, 'min_avail_temp') && $data->{'min_avail_temp'} === null) {
            $object->setMinAvailTemp(null);
        }
        if (property_exists($data, 'max_avail_temp') && $data->{'max_avail_temp'} !== null) {
            $object->setMaxAvailTemp($data->{'max_avail_temp'});
        }
        elseif (property_exists($data, 'max_avail_temp') && $data->{'max_avail_temp'} === null) {
            $object->setMaxAvailTemp(null);
        }
        if (property_exists($data, 'seat_heater_left') && $data->{'seat_heater_left'} !== null) {
            $object->setSeatHeaterLeft($data->{'seat_heater_left'});
        }
        elseif (property_exists($data, 'seat_heater_left') && $data->{'seat_heater_left'} === null) {
            $object->setSeatHeaterLeft(null);
        }
        if (property_exists($data, 'seat_heater_right') && $data->{'seat_heater_right'} !== null) {
            $object->setSeatHeaterRight($data->{'seat_heater_right'});
        }
        elseif (property_exists($data, 'seat_heater_right') && $data->{'seat_heater_right'} === null) {
            $object->setSeatHeaterRight(null);
        }
        if (property_exists($data, 'seat_heater_rear_left') && $data->{'seat_heater_rear_left'} !== null) {
            $object->setSeatHeaterRearLeft($data->{'seat_heater_rear_left'});
        }
        elseif (property_exists($data, 'seat_heater_rear_left') && $data->{'seat_heater_rear_left'} === null) {
            $object->setSeatHeaterRearLeft(null);
        }
        if (property_exists($data, 'seat_heater_rear_right') && $data->{'seat_heater_rear_right'} !== null) {
            $object->setSeatHeaterRearRight($data->{'seat_heater_rear_right'});
        }
        elseif (property_exists($data, 'seat_heater_rear_right') && $data->{'seat_heater_rear_right'} === null) {
            $object->setSeatHeaterRearRight(null);
        }
        if (property_exists($data, 'seat_heater_rear_center') && $data->{'seat_heater_rear_center'} !== null) {
            $object->setSeatHeaterRearCenter($data->{'seat_heater_rear_center'});
        }
        elseif (property_exists($data, 'seat_heater_rear_center') && $data->{'seat_heater_rear_center'} === null) {
            $object->setSeatHeaterRearCenter(null);
        }
        if (property_exists($data, 'seat_heater_rear_right_back') && $data->{'seat_heater_rear_right_back'} !== null) {
            $object->setSeatHeaterRearRightBack($data->{'seat_heater_rear_right_back'});
        }
        elseif (property_exists($data, 'seat_heater_rear_right_back') && $data->{'seat_heater_rear_right_back'} === null) {
            $object->setSeatHeaterRearRightBack(null);
        }
        if (property_exists($data, 'seat_heater_rear_left_back') && $data->{'seat_heater_rear_left_back'} !== null) {
            $object->setSeatHeaterRearLeftBack($data->{'seat_heater_rear_left_back'});
        }
        elseif (property_exists($data, 'seat_heater_rear_left_back') && $data->{'seat_heater_rear_left_back'} === null) {
            $object->setSeatHeaterRearLeftBack(null);
        }
        if (property_exists($data, 'battery_heater')) {
            $object->setBatteryHeater($data->{'battery_heater'});
        }
        if (property_exists($data, 'battery_heater_no_power') && $data->{'battery_heater_no_power'} !== null) {
            $object->setBatteryHeaterNoPower($data->{'battery_heater_no_power'});
        }
        elseif (property_exists($data, 'battery_heater_no_power') && $data->{'battery_heater_no_power'} === null) {
            $object->setBatteryHeaterNoPower(null);
        }
        if (property_exists($data, 'steering_wheel_heater')) {
            $object->setSteeringWheelHeater($data->{'steering_wheel_heater'});
        }
        if (property_exists($data, 'wiper_blade_heater')) {
            $object->setWiperBladeHeater($data->{'wiper_blade_heater'});
        }
        if (property_exists($data, 'side_mirror_heaters')) {
            $object->setSideMirrorHeaters($data->{'side_mirror_heaters'});
        }
        if (property_exists($data, 'is_preconditioning')) {
            $object->setIsPreconditioning($data->{'is_preconditioning'});
        }
        if (property_exists($data, 'smart_preconditioning')) {
            $object->setSmartPreconditioning($data->{'smart_preconditioning'});
        }
        if (property_exists($data, 'is_auto_conditioning_on')) {
            $object->setIsAutoConditioningOn($data->{'is_auto_conditioning_on'});
        }
        if (property_exists($data, 'defrost_mode') && $data->{'defrost_mode'} !== null) {
            $object->setDefrostMode($data->{'defrost_mode'});
        }
        elseif (property_exists($data, 'defrost_mode') && $data->{'defrost_mode'} === null) {
            $object->setDefrostMode(null);
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'inside_temp'} = $object->getInsideTemp();
        $data->{'outside_temp'} = $object->getOutsideTemp();
        $data->{'driver_temp_setting'} = $object->getDriverTempSetting();
        $data->{'passenger_temp_setting'} = $object->getPassengerTempSetting();
        $data->{'left_temp_direction'} = $object->getLeftTempDirection();
        $data->{'right_temp_direction'} = $object->getRightTempDirection();
        if (null !== $object->getIsFrontDefrosterOn()) {
            $data->{'is_front_defroster_on'} = $object->getIsFrontDefrosterOn();
        }
        if (null !== $object->getIsRearDefrosterOn()) {
            $data->{'is_rear_defroster_on'} = $object->getIsRearDefrosterOn();
        }
        $data->{'fan_status'} = $object->getFanStatus();
        if (null !== $object->getIsClimateOn()) {
            $data->{'is_climate_on'} = $object->getIsClimateOn();
        }
        $data->{'min_avail_temp'} = $object->getMinAvailTemp();
        $data->{'max_avail_temp'} = $object->getMaxAvailTemp();
        $data->{'seat_heater_left'} = $object->getSeatHeaterLeft();
        $data->{'seat_heater_right'} = $object->getSeatHeaterRight();
        $data->{'seat_heater_rear_left'} = $object->getSeatHeaterRearLeft();
        $data->{'seat_heater_rear_right'} = $object->getSeatHeaterRearRight();
        $data->{'seat_heater_rear_center'} = $object->getSeatHeaterRearCenter();
        $data->{'seat_heater_rear_right_back'} = $object->getSeatHeaterRearRightBack();
        $data->{'seat_heater_rear_left_back'} = $object->getSeatHeaterRearLeftBack();
        if (null !== $object->getBatteryHeater()) {
            $data->{'battery_heater'} = $object->getBatteryHeater();
        }
        $data->{'battery_heater_no_power'} = $object->getBatteryHeaterNoPower();
        if (null !== $object->getSteeringWheelHeater()) {
            $data->{'steering_wheel_heater'} = $object->getSteeringWheelHeater();
        }
        if (null !== $object->getWiperBladeHeater()) {
            $data->{'wiper_blade_heater'} = $object->getWiperBladeHeater();
        }
        if (null !== $object->getSideMirrorHeaters()) {
            $data->{'side_mirror_heaters'} = $object->getSideMirrorHeaters();
        }
        if (null !== $object->getIsPreconditioning()) {
            $data->{'is_preconditioning'} = $object->getIsPreconditioning();
        }
        if (null !== $object->getSmartPreconditioning()) {
            $data->{'smart_preconditioning'} = $object->getSmartPreconditioning();
        }
        if (null !== $object->getIsAutoConditioningOn()) {
            $data->{'is_auto_conditioning_on'} = $object->getIsAutoConditioningOn();
        }
        $data->{'defrost_mode'} = $object->getDefrostMode();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        return $data;
    }
}