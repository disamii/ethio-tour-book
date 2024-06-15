==============================================================
PSPICE Library for INFINION TECHNOLOGIES AG 1200V Diodes   
				           Date: Jan 2002
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

IDX_E120_L2.LIB (V1.5)    
------------------

This library contains level-2 models (device temperature
is set by the parameter TJ) for the following INFINEON 1200 V Diodes				
devices/chip-models including lead inductances related to	 
packages:							
IDP04E120 = IDB04E120		4A/1200V
IDP09E120 = IDB09E120		9A/1200V
IDP12E120 = IDB12E120		12A/1200V
IDP18E120 = IDB18E120		18A/1200V	
IDP30E120 = IDB30E120		30A/1200V			
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
