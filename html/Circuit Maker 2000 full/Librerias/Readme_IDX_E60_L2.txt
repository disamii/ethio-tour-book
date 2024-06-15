==============================================================
PSPICE Library for INFINION TECHNOLOGIES AG 600V Diodes   
				           Date: Dec 2001
==============================================================

*****************************************************************
* simulation support:  simulate@infineon.com                    *
*                                                               *
* internet          :  www.infineon.com\simulate                * 
*****************************************************************                                                               *


The library is comprised of the following files:
------------------------------------------------
The xxx.LIB file represents the Spice model library. 

The xxx.SLB file contains the terminal/graphics information 
required by the PSpice graphic user interface "Schematics".


INSTALLATION
------------
To install the library, copy all xxx.LIB and xxx.SLB files 
into your directory: 

  x:\"PSpice working directory"\(user-)LIB\ 

The library files must then be activated under PSpice. 
Proceed as follows in the simulation program PSpice-Schematics:

1.Install the library file xxx.LIB as a permanent 
  library ("ADD LIBRARY*") in submenu 
  ANALYSIS -> LIBRARY AND INCLUDE FILES ... 

2.Install the symbol data file xxx.SLB for the
  "Schematics" graphic interface in submenu
  OPTIONS -> EDITOR CONFIGURATION -> LIBRARY SETTINGS

===============================================================

IDX_E60_L2.LIB (V1.5a)    
------------------

This library contains level-2 models (device temperature
is set by the parameter TJ) for the following INFINEON 600 V Diodes				
devices/chip-models including lead inductances related to	 
packages:							
IDD03E60				3A/600V
IDP06E60 = IDB06E60 = IDD06E60		6A/600V
IDP09E60 = IDB09E60 = IDD09E60		9A/600V
IDP15E60 = IDB15E60 = IDD15E60		15A/600V
IDP23E60 = IDB23E60 = IDD23E60		23A/600V
IDP30E60 = IDB30E60			30A/600V
IDP45E60 = IDB45E60			45A/600V		
===============================================================

For modelling, we recommend to set the following options in
ANALYSIS -> SETUP -> OPTIONS :

1) Due to the high current values in power electronic circuits and the 
   large dynamic range in currents, it is suggested that the user 
   increases the default values for ABSTOL, CHGTOL and VNTOL to 
   ABSTOL > 1pA (hence 1nA or even 100nA).  
2) To avoid problems in finding a solution, it is suggested that
   ITL2=200 and ITL4=400 be used.
3) Depending on the circuit, RELTOL may have to be changed from its
   default setting.
4) If further convergence problems arise, it is suggested that the 
   user refer to the simulators user´s guide


=====================================================================
* Note:                                                             *
* Altough models can be a useful tool in evaluating device          *
* performance, they cannot model exact device performance           *
* under all conditions, nor are they intended to replace            *
* breadboarding for final verification!                             *
*                                                                   *
* Models provided by INFINEON TECHNOLOGIES AG are not warranted by  *
* INFINEON TECHNOLOGIES AG				            *
* as fully representing all of the specifications and operating     *
* characteristics of the semiconductor product to which the         *
* model relates.                                                    *
* The models describe the characteristics of typical devices.       *
* In all cases, the current data sheet information for a given      *
* device is the final design guideline and the only actual          *
* performance specification.                                        * 
* INFINEON TECHNOLOGIES AG does not assume any liability arising    *
* from the model use. INFINEON TECHNOLOGIES AG reserves the right to*
* change models without prior notice.				    *
*                                                                   *
* This disclaimer is a part of the respective library files !       *
=====================================================================
