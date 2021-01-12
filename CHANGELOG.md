# Change Log

## v1.1.0 (2020-10-13)

### Removed

* Removed `FtpBaseConfig` class.
* Removed `FtpClient::getTransferMode` method.
* Removed `FtpClient::isEmptyDirectory` & `FtpClient::isEmptyFile` use `FtpClient::isEmpty` instead for both files and directories.

### Behavior changed
    
* `FtpClient::removeFile` & `FtpClient::removeDirectory` methods now doesn't throw an exception if the given file doesn't exist, but instead returns false.
* `FtpClient::createFile` now doesn't throw an exception if the file name already exists on the server, instead, the remote file will be overwritten.
* `FtpClient::createDirectory` now returns true if the giving directory already exists instead of throwing an exception.

### Improved

* FTP error handling improved, the `FtpWrapper` is now responsible for detecting and muting FTP functions errors.
* Unit tests improved.
* Docs improved.

## v1.0.2 (2020-8-17)

* Fixed `isExists` method (#5).
* Fixed error handling of `createDirectory`  & `createFile` methods (#5).

## v1.0.0 (2020-8-15)

* Fixed listDirectoryDetails not working with directories contains spaces. (#2)
* Fixed listDirectoryDetails incorrect file path. (#4)

## v1.0.0-RC1 (2020-5-17)

* First release.