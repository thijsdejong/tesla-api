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
class VehicleConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\VehicleConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\VehicleConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Tesla\Api\Model\VehicleConfig();
        if (property_exists($data, 'can_actuate_trunks')) {
            $object->setCanActuateTrunks($data->{'can_actuate_trunks'});
        }
        if (property_exists($data, 'can_accept_navigation_requests')) {
            $object->setCanAcceptNavigationRequests($data->{'can_accept_navigation_requests'});
        }
        if (property_exists($data, 'car_special_type') && $data->{'car_special_type'} !== null) {
            $object->setCarSpecialType($data->{'car_special_type'});
        }
        elseif (property_exists($data, 'car_special_type') && $data->{'car_special_type'} === null) {
            $object->setCarSpecialType(null);
        }
        if (property_exists($data, 'car_type') && $data->{'car_type'} !== null) {
            $object->setCarType($data->{'car_type'});
        }
        elseif (property_exists($data, 'car_type') && $data->{'car_type'} === null) {
            $object->setCarType(null);
        }
        if (property_exists($data, 'charge_port_type') && $data->{'charge_port_type'} !== null) {
            $object->setChargePortType($data->{'charge_port_type'});
        }
        elseif (property_exists($data, 'charge_port_type') && $data->{'charge_port_type'} === null) {
            $object->setChargePortType(null);
        }
        if (property_exists($data, 'eu_vehicle')) {
            $object->setEuVehicle($data->{'eu_vehicle'});
        }
        if (property_exists($data, 'exterior_color') && $data->{'exterior_color'} !== null) {
            $object->setExteriorColor($data->{'exterior_color'});
        }
        elseif (property_exists($data, 'exterior_color') && $data->{'exterior_color'} === null) {
            $object->setExteriorColor(null);
        }
        if (property_exists($data, 'has_ludicrous_mode')) {
            $object->setHasLudicrousMode($data->{'has_ludicrous_mode'});
        }
        if (property_exists($data, 'motorized_charge_port')) {
            $object->setMotorizedChargePort($data->{'motorized_charge_port'});
        }
        if (property_exists($data, 'perf_config') && $data->{'perf_config'} !== null) {
            $object->setPerfConfig($data->{'perf_config'});
        }
        elseif (property_exists($data, 'perf_config') && $data->{'perf_config'} === null) {
            $object->setPerfConfig(null);
        }
        if (property_exists($data, 'plg')) {
            $object->setPlg($data->{'plg'});
        }
        if (property_exists($data, 'rear_seat_heaters') && $data->{'rear_seat_heaters'} !== null) {
            $object->setRearSeatHeaters($data->{'rear_seat_heaters'});
        }
        elseif (property_exists($data, 'rear_seat_heaters') && $data->{'rear_seat_heaters'} === null) {
            $object->setRearSeatHeaters(null);
        }
        if (property_exists($data, 'rear_seat_type') && $data->{'rear_seat_type'} !== null) {
            $object->setRearSeatType($data->{'rear_seat_type'});
        }
        elseif (property_exists($data, 'rear_seat_type') && $data->{'rear_seat_type'} === null) {
            $object->setRearSeatType(null);
        }
        if (property_exists($data, 'rhd')) {
            $object->setRhd($data->{'rhd'});
        }
        if (property_exists($data, 'roof_color') && $data->{'roof_color'} !== null) {
            $object->setRoofColor($data->{'roof_color'});
        }
        elseif (property_exists($data, 'roof_color') && $data->{'roof_color'} === null) {
            $object->setRoofColor(null);
        }
        if (property_exists($data, 'seat_type') && $data->{'seat_type'} !== null) {
            $object->setSeatType($data->{'seat_type'});
        }
        elseif (property_exists($data, 'seat_type') && $data->{'seat_type'} === null) {
            $object->setSeatType(null);
        }
        if (property_exists($data, 'spoiler_type') && $data->{'spoiler_type'} !== null) {
            $object->setSpoilerType($data->{'spoiler_type'});
        }
        elseif (property_exists($data, 'spoiler_type') && $data->{'spoiler_type'} === null) {
            $object->setSpoilerType(null);
        }
        if (property_exists($data, 'sun_roof_installed') && $data->{'sun_roof_installed'} !== null) {
            $object->setSunRoofInstalled($data->{'sun_roof_installed'});
        }
        elseif (property_exists($data, 'sun_roof_installed') && $data->{'sun_roof_installed'} === null) {
            $object->setSunRoofInstalled(null);
        }
        if (property_exists($data, 'third_row_seats') && $data->{'third_row_seats'} !== null) {
            $object->setThirdRowSeats($data->{'third_row_seats'});
        }
        elseif (property_exists($data, 'third_row_seats') && $data->{'third_row_seats'} === null) {
            $object->setThirdRowSeats(null);
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        if (property_exists($data, 'trim_badging') && $data->{'trim_badging'} !== null) {
            $object->setTrimBadging($data->{'trim_badging'});
        }
        elseif (property_exists($data, 'trim_badging') && $data->{'trim_badging'} === null) {
            $object->setTrimBadging(null);
        }
        if (property_exists($data, 'wheel_type') && $data->{'wheel_type'} !== null) {
            $object->setWheelType($data->{'wheel_type'});
        }
        elseif (property_exists($data, 'wheel_type') && $data->{'wheel_type'} === null) {
            $object->setWheelType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCanActuateTrunks()) {
            $data->{'can_actuate_trunks'} = $object->getCanActuateTrunks();
        }
        if (null !== $object->getCanAcceptNavigationRequests()) {
            $data->{'can_accept_navigation_requests'} = $object->getCanAcceptNavigationRequests();
        }
        $data->{'car_special_type'} = $object->getCarSpecialType();
        $data->{'car_type'} = $object->getCarType();
        $data->{'charge_port_type'} = $object->getChargePortType();
        if (null !== $object->getEuVehicle()) {
            $data->{'eu_vehicle'} = $object->getEuVehicle();
        }
        $data->{'exterior_color'} = $object->getExteriorColor();
        if (null !== $object->getHasLudicrousMode()) {
            $data->{'has_ludicrous_mode'} = $object->getHasLudicrousMode();
        }
        if (null !== $object->getMotorizedChargePort()) {
            $data->{'motorized_charge_port'} = $object->getMotorizedChargePort();
        }
        $data->{'perf_config'} = $object->getPerfConfig();
        if (null !== $object->getPlg()) {
            $data->{'plg'} = $object->getPlg();
        }
        $data->{'rear_seat_heaters'} = $object->getRearSeatHeaters();
        $data->{'rear_seat_type'} = $object->getRearSeatType();
        if (null !== $object->getRhd()) {
            $data->{'rhd'} = $object->getRhd();
        }
        $data->{'roof_color'} = $object->getRoofColor();
        $data->{'seat_type'} = $object->getSeatType();
        $data->{'spoiler_type'} = $object->getSpoilerType();
        $data->{'sun_roof_installed'} = $object->getSunRoofInstalled();
        $data->{'third_row_seats'} = $object->getThirdRowSeats();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        $data->{'trim_badging'} = $object->getTrimBadging();
        $data->{'wheel_type'} = $object->getWheelType();
        return $data;
    }
}