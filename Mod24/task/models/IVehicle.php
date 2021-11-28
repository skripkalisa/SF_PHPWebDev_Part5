<?php
interface IVehicle {
  function startEngine();
  function stopEngine();
  function drive(int $code);
}