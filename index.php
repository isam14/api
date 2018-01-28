

<!-- Since the method is a static, one practice is using it to check whether a specific server database driver is available and configured correctly with PDO before establishing the connection: -->
<?php
if (empty(PDO::getAvailableDrivers()))
{
    throw new PDOException ("PDO does not support any driver.");
}

