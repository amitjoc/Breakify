# Breakify  
Breakify is a lightweight PHP utility for managing and transforming line breaks across platforms and formats.
Whether you're normalizing text input, preparing content for HTML output, or ensuring consistent formatting in 
logs or CLI tools, Breakify offers a clean, expressive API to handle it all.

# Environment
- `web` : when we are sure that script will be executed only on web requests
- `cli` : when we are sure that script will be executed only on cli requests
- `Both`: when we are not sure a script's environment, it can be executed on both as per need


# Feature List

- Normalize or convert line breaks across different platforms `(Windows \r\n, Unix \n, Mac \r)`,  
  or format text for HTML, CLI, or logs.
- Handle other `escape character` too for cli (`in progress`)


## Example for Web 

When we already know that our `script` only executed on `web` environment

- print `br` 
  ```php
  $web = new Breakify()
  $web->pbr();
  ```
- print `hr` 
- print `dashed, dotted, ridge, double` `hr` line
- print output for `pre` 


## Only for Cli

When we already know that our `script` only executed on `cli` environment

- print new line `PHP_EOL`
- print double new line `PHP_EOL`.`PHP_EOL`
- print carriage return also `\r`
- print text withing the box with desired character like -, = 
- Make a bell sound `beap()` from php (available only in cli mode)

# Functions

## Web

## Cli
  
> [!IMPORTANT]
> Below command will give you column width of open cli windows 
> working with both PowerShell and command prompt 
> Command Prompt: mode con /status | findstr "Columns"
> PowerShell Command: ($host.UI.RawUI.WindowSize).Width
> 

## Both 


# Task List 

## OS Related 

- [ ] get/identify `os` version 
- [ ] get/identify `cmd` version
- [ ] get/identify `power shell` version 
- [ ] get/identify `shell` version 
- [ ] have to do `Refactoring` using PSR-12

## Important Task

- [ ] Force environment during object creation 
- [x] Function `checkRequest()` Type `web | cli`. Must `return` request type
- [x] Function `isCli()` to check coming request `cli` or not. return `true` or `false` accordingly    

## For `web`

- [ ] print br 
- [ ] print br multiple times
- [ ] print hr
- [ ] print dashed hr and others where we can change the style of `hr` 
- [ ] custom hr line width and height and center also with in build stylesheet 


## Coding Standard 

-- PSR 2 or PSR12 

## Commands for Cli

> Commands : `powershell -command "&{$H=get-host;$H.ui.rawui;}"`  
> 
> Output:  
> ForegroundColor       : Gray  
> BackgroundColor       : Black  
> CursorPosition        : 0,2  
> WindowPosition        : 0,0  
> CursorSize            : 25  
> BufferSize            : 106,30  
> WindowSize            : 106,30  
> MaxWindowSize         : 106,30  
> MaxPhysicalWindowSize : 1350,699  
> KeyAvailable          : True   
> WindowTitle           : Command Prompt - powershell  -command "&{$H=get-host;$H.ui.rawui;}"  

> To identify a script is executed on cmd on windows
> below command will output cmd.exe file path 
> Command: echo %COMSPEC%