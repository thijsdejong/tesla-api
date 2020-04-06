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
class ChargeStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\ChargeState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\ChargeState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Tesla\Api\Model\ChargeState();
        if (property_exists($data, 'charging_state') && $data->{'charging_state'} !== null) {
            $object->setChargingState($data->{'charging_state'});
        }
        elseif (property_exists($data, 'charging_state') && $data->{'charging_state'} === null) {
            $object->setChargingState(null);
        }
        if (property_exists($data, 'fast_charger_type') && $data->{'fast_charger_type'} !== null) {
            $object->setFastChargerType($data->{'fast_charger_type'});
        }
        elseif (property_exists($data, 'fast_charger_type') && $data->{'fast_charger_type'} === null) {
            $object->setFastChargerType(null);
        }
        if (property_exists($data, 'fast_charger_brand') && $data->{'fast_charger_brand'} !== null) {
            $object->setFastChargerBrand($data->{'fast_charger_brand'});
        }
        elseif (property_exists($data, 'fast_charger_brand') && $data->{'fast_charger_brand'} === null) {
            $object->setFastChargerBrand(null);
        }
        if (property_exists($data, 'charge_limit_soc') && $data->{'charge_limit_soc'} !== null) {
            $object->setChargeLimitSoc($data->{'charge_limit_soc'});
        }
        elseif (property_exists($data, 'charge_limit_soc') && $data->{'charge_limit_soc'} === null) {
            $object->setChargeLimitSoc(null);
        }
        if (property_exists($data, 'charge_limit_soc_std') && $data->{'charge_limit_soc_std'} !== null) {
            $object->setChargeLimitSocStd($data->{'charge_limit_soc_std'});
        }
        elseif (property_exists($data, 'charge_limit_soc_std') && $data->{'charge_limit_soc_std'} === null) {
            $object->setChargeLimitSocStd(null);
        }
        if (property_exists($data, 'charge_limit_soc_min') && $data->{'charge_limit_soc_min'} !== null) {
            $object->setChargeLimitSocMin($data->{'charge_limit_soc_min'});
        }
        elseif (property_exists($data, 'charge_limit_soc_min') && $data->{'charge_limit_soc_min'} === null) {
            $object->setChargeLimitSocMin(null);
        }
        if (property_exists($data, 'charge_limit_soc_max') && $data->{'charge_limit_soc_max'} !== null) {
            $object->setChargeLimitSocMax($data->{'charge_limit_soc_max'});
        }
        elseif (property_exists($data, 'charge_limit_soc_max') && $data->{'charge_limit_soc_max'} === null) {
            $object->setChargeLimitSocMax(null);
        }
        if (property_exists($data, 'charge_to_max_range')) {
            $object->setChargeToMaxRange($data->{'charge_to_max_range'});
        }
        if (property_exists($data, 'max_range_charge_counter') && $data->{'max_range_charge_counter'} !== null) {
            $object->setMaxRangeChargeCounter($data->{'max_range_charge_counter'});
        }
        elseif (property_exists($data, 'max_range_charge_counter') && $data->{'max_range_charge_counter'} === null) {
            $object->setMaxRangeChargeCounter(null);
        }
        if (property_exists($data, 'fast_charger_present')) {
            $object->setFastChargerPresent($data->{'fast_charger_present'});
        }
        if (property_exists($data, 'battery_range') && $data->{'battery_range'} !== null) {
            $object->setBatteryRange($data->{'battery_range'});
        }
        elseif (property_exists($data, 'battery_range') && $data->{'battery_range'} === null) {
            $object->setBatteryRange(null);
        }
        if (property_exists($data, 'est_battery_range') && $data->{'est_battery_range'} !== null) {
            $object->setEstBatteryRange($data->{'est_battery_range'});
        }
        elseif (property_exists($data, 'est_battery_range') && $data->{'est_battery_range'} === null) {
            $object->setEstBatteryRange(null);
        }
        if (property_exists($data, 'ideal_battery_range') && $data->{'ideal_battery_range'} !== null) {
            $object->setIdealBatteryRange($data->{'ideal_battery_range'});
        }
        elseif (property_exists($data, 'ideal_battery_range') && $data->{'ideal_battery_range'} === null) {
            $object->setIdealBatteryRange(null);
        }
        if (property_exists($data, 'battery_level') && $data->{'battery_level'} !== null) {
            $object->setBatteryLevel($data->{'battery_level'});
        }
        elseif (property_exists($data, 'battery_level') && $data->{'battery_level'} === null) {
            $object->setBatteryLevel(null);
        }
        if (property_exists($data, 'usable_battery_level') && $data->{'usable_battery_level'} !== null) {
            $object->setUsableBatteryLevel($data->{'usable_battery_level'});
        }
        elseif (property_exists($data, 'usable_battery_level') && $data->{'usable_battery_level'} === null) {
            $object->setUsableBatteryLevel(null);
        }
        if (property_exists($data, 'charge_energy_added') && $data->{'charge_energy_added'} !== null) {
            $object->setChargeEnergyAdded($data->{'charge_energy_added'});
        }
        elseif (property_exists($data, 'charge_energy_added') && $data->{'charge_energy_added'} === null) {
            $object->setChargeEnergyAdded(null);
        }
        if (property_exists($data, 'charge_miles_added_rated') && $data->{'charge_miles_added_rated'} !== null) {
            $object->setChargeMilesAddedRated($data->{'charge_miles_added_rated'});
        }
        elseif (property_exists($data, 'charge_miles_added_rated') && $data->{'charge_miles_added_rated'} === null) {
            $object->setChargeMilesAddedRated(null);
        }
        if (property_exists($data, 'charge_miles_added_ideal') && $data->{'charge_miles_added_ideal'} !== null) {
            $object->setChargeMilesAddedIdeal($data->{'charge_miles_added_ideal'});
        }
        elseif (property_exists($data, 'charge_miles_added_ideal') && $data->{'charge_miles_added_ideal'} === null) {
            $object->setChargeMilesAddedIdeal(null);
        }
        if (property_exists($data, 'charger_voltage') && $data->{'charger_voltage'} !== null) {
            $object->setChargerVoltage($data->{'charger_voltage'});
        }
        elseif (property_exists($data, 'charger_voltage') && $data->{'charger_voltage'} === null) {
            $object->setChargerVoltage(null);
        }
        if (property_exists($data, 'charger_pilot_current') && $data->{'charger_pilot_current'} !== null) {
            $object->setChargerPilotCurrent($data->{'charger_pilot_current'});
        }
        elseif (property_exists($data, 'charger_pilot_current') && $data->{'charger_pilot_current'} === null) {
            $object->setChargerPilotCurrent(null);
        }
        if (property_exists($data, 'charger_actual_current') && $data->{'charger_actual_current'} !== null) {
            $object->setChargerActualCurrent($data->{'charger_actual_current'});
        }
        elseif (property_exists($data, 'charger_actual_current') && $data->{'charger_actual_current'} === null) {
            $object->setChargerActualCurrent(null);
        }
        if (property_exists($data, 'charger_power') && $data->{'charger_power'} !== null) {
            $object->setChargerPower($data->{'charger_power'});
        }
        elseif (property_exists($data, 'charger_power') && $data->{'charger_power'} === null) {
            $object->setChargerPower(null);
        }
        if (property_exists($data, 'time_to_full_charge') && $data->{'time_to_full_charge'} !== null) {
            $object->setTimeToFullCharge($data->{'time_to_full_charge'});
        }
        elseif (property_exists($data, 'time_to_full_charge') && $data->{'time_to_full_charge'} === null) {
            $object->setTimeToFullCharge(null);
        }
        if (property_exists($data, 'trip_charging')) {
            $object->setTripCharging($data->{'trip_charging'});
        }
        if (property_exists($data, 'charge_rate') && $data->{'charge_rate'} !== null) {
            $object->setChargeRate($data->{'charge_rate'});
        }
        elseif (property_exists($data, 'charge_rate') && $data->{'charge_rate'} === null) {
            $object->setChargeRate(null);
        }
        if (property_exists($data, 'charge_port_door_open')) {
            $object->setChargePortDoorOpen($data->{'charge_port_door_open'});
        }
        if (property_exists($data, 'conn_charge_cable') && $data->{'conn_charge_cable'} !== null) {
            $object->setConnChargeCable($data->{'conn_charge_cable'});
        }
        elseif (property_exists($data, 'conn_charge_cable') && $data->{'conn_charge_cable'} === null) {
            $object->setConnChargeCable(null);
        }
        if (property_exists($data, 'scheduled_charging_start_time') && $data->{'scheduled_charging_start_time'} !== null) {
            $object->setScheduledChargingStartTime($data->{'scheduled_charging_start_time'});
        }
        elseif (property_exists($data, 'scheduled_charging_start_time') && $data->{'scheduled_charging_start_time'} === null) {
            $object->setScheduledChargingStartTime(null);
        }
        if (property_exists($data, 'scheduled_charging_pending')) {
            $object->setScheduledChargingPending($data->{'scheduled_charging_pending'});
        }
        if (property_exists($data, 'user_charge_enable_request') && $data->{'user_charge_enable_request'} !== null) {
            $object->setUserChargeEnableRequest($data->{'user_charge_enable_request'});
        }
        elseif (property_exists($data, 'user_charge_enable_request') && $data->{'user_charge_enable_request'} === null) {
            $object->setUserChargeEnableRequest(null);
        }
        if (property_exists($data, 'charge_enable_request')) {
            $object->setChargeEnableRequest($data->{'charge_enable_request'});
        }
        if (property_exists($data, 'charger_phases') && $data->{'charger_phases'} !== null) {
            $object->setChargerPhases($data->{'charger_phases'});
        }
        elseif (property_exists($data, 'charger_phases') && $data->{'charger_phases'} === null) {
            $object->setChargerPhases(null);
        }
        if (property_exists($data, 'charge_port_latch') && $data->{'charge_port_latch'} !== null) {
            $object->setChargePortLatch($data->{'charge_port_latch'});
        }
        elseif (property_exists($data, 'charge_port_latch') && $data->{'charge_port_latch'} === null) {
            $object->setChargePortLatch(null);
        }
        if (property_exists($data, 'charge_current_request') && $data->{'charge_current_request'} !== null) {
            $object->setChargeCurrentRequest($data->{'charge_current_request'});
        }
        elseif (property_exists($data, 'charge_current_request') && $data->{'charge_current_request'} === null) {
            $object->setChargeCurrentRequest(null);
        }
        if (property_exists($data, 'charge_current_request_max') && $data->{'charge_current_request_max'} !== null) {
            $object->setChargeCurrentRequestMax($data->{'charge_current_request_max'});
        }
        elseif (property_exists($data, 'charge_current_request_max') && $data->{'charge_current_request_max'} === null) {
            $object->setChargeCurrentRequestMax(null);
        }
        if (property_exists($data, 'managed_charging_active')) {
            $object->setManagedChargingActive($data->{'managed_charging_active'});
        }
        if (property_exists($data, 'managed_charging_user_canceled')) {
            $object->setManagedChargingUserCanceled($data->{'managed_charging_user_canceled'});
        }
        if (property_exists($data, 'managed_charging_start_time') && $data->{'managed_charging_start_time'} !== null) {
            $object->setManagedChargingStartTime($data->{'managed_charging_start_time'});
        }
        elseif (property_exists($data, 'managed_charging_start_time') && $data->{'managed_charging_start_time'} === null) {
            $object->setManagedChargingStartTime(null);
        }
        if (property_exists($data, 'battery_heater_on')) {
            $object->setBatteryHeaterOn($data->{'battery_heater_on'});
        }
        if (property_exists($data, 'not_enough_power_to_heat') && $data->{'not_enough_power_to_heat'} !== null) {
            $object->setNotEnoughPowerToHeat($data->{'not_enough_power_to_heat'});
        }
        elseif (property_exists($data, 'not_enough_power_to_heat') && $data->{'not_enough_power_to_heat'} === null) {
            $object->setNotEnoughPowerToHeat(null);
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'charging_state'} = $object->getChargingState();
        $data->{'fast_charger_type'} = $object->getFastChargerType();
        $data->{'fast_charger_brand'} = $object->getFastChargerBrand();
        $data->{'charge_limit_soc'} = $object->getChargeLimitSoc();
        $data->{'charge_limit_soc_std'} = $object->getChargeLimitSocStd();
        $data->{'charge_limit_soc_min'} = $object->getChargeLimitSocMin();
        $data->{'charge_limit_soc_max'} = $object->getChargeLimitSocMax();
        if (null !== $object->getChargeToMaxRange()) {
            $data->{'charge_to_max_range'} = $object->getChargeToMaxRange();
        }
        $data->{'max_range_charge_counter'} = $object->getMaxRangeChargeCounter();
        if (null !== $object->getFastChargerPresent()) {
            $data->{'fast_charger_present'} = $object->getFastChargerPresent();
        }
        $data->{'battery_range'} = $object->getBatteryRange();
        $data->{'est_battery_range'} = $object->getEstBatteryRange();
        $data->{'ideal_battery_range'} = $object->getIdealBatteryRange();
        $data->{'battery_level'} = $object->getBatteryLevel();
        $data->{'usable_battery_level'} = $object->getUsableBatteryLevel();
        $data->{'charge_energy_added'} = $object->getChargeEnergyAdded();
        $data->{'charge_miles_added_rated'} = $object->getChargeMilesAddedRated();
        $data->{'charge_miles_added_ideal'} = $object->getChargeMilesAddedIdeal();
        $data->{'charger_voltage'} = $object->getChargerVoltage();
        $data->{'charger_pilot_current'} = $object->getChargerPilotCurrent();
        $data->{'charger_actual_current'} = $object->getChargerActualCurrent();
        $data->{'charger_power'} = $object->getChargerPower();
        $data->{'time_to_full_charge'} = $object->getTimeToFullCharge();
        if (null !== $object->getTripCharging()) {
            $data->{'trip_charging'} = $object->getTripCharging();
        }
        $data->{'charge_rate'} = $object->getChargeRate();
        if (null !== $object->getChargePortDoorOpen()) {
            $data->{'charge_port_door_open'} = $object->getChargePortDoorOpen();
        }
        $data->{'conn_charge_cable'} = $object->getConnChargeCable();
        $data->{'scheduled_charging_start_time'} = $object->getScheduledChargingStartTime();
        if (null !== $object->getScheduledChargingPending()) {
            $data->{'scheduled_charging_pending'} = $object->getScheduledChargingPending();
        }
        $data->{'user_charge_enable_request'} = $object->getUserChargeEnableRequest();
        if (null !== $object->getChargeEnableRequest()) {
            $data->{'charge_enable_request'} = $object->getChargeEnableRequest();
        }
        $data->{'charger_phases'} = $object->getChargerPhases();
        $data->{'charge_port_latch'} = $object->getChargePortLatch();
        $data->{'charge_current_request'} = $object->getChargeCurrentRequest();
        $data->{'charge_current_request_max'} = $object->getChargeCurrentRequestMax();
        if (null !== $object->getManagedChargingActive()) {
            $data->{'managed_charging_active'} = $object->getManagedChargingActive();
        }
        if (null !== $object->getManagedChargingUserCanceled()) {
            $data->{'managed_charging_user_canceled'} = $object->getManagedChargingUserCanceled();
        }
        $data->{'managed_charging_start_time'} = $object->getManagedChargingStartTime();
        if (null !== $object->getBatteryHeaterOn()) {
            $data->{'battery_heater_on'} = $object->getBatteryHeaterOn();
        }
        $data->{'not_enough_power_to_heat'} = $object->getNotEnoughPowerToHeat();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        return $data;
    }
}