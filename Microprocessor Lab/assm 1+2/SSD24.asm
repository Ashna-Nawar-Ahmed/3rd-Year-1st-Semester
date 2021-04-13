;0CA2

SSD24 SEGMENT PARA PUBLIC 'CODE'
ASSUME CS: SSD24
ORG 1000H

START:
    ;TURN ON CONTROL REGISTER
    MOV AL,80H
    OUT 1FH,AL
SSD:
     ;DISPLAY 0              
     MOV AL,0C0H
     OUT 19H,AL	
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L0:LOOP L0 
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L1:LOOP L1
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L2:LOOP L2
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L3:LOOP L3
	 
     ;DISPLAY C       
     MOV AL,0C6H
     OUT 19H,AL
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L4:LOOP L4
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L5:LOOP L5
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L6:LOOP L6
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L7:LOOP L7
	 
     ;DISPLAY A              
     MOV AL,088H
     OUT 19H,AL	
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L8:LOOP L8
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L9:LOOP L9
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L10:LOOP L10
     ;DELAY                                                  
     MOV CX,0FFFFH                                                                             
     L11:LOOP L11
	 
     ;DISPLAY 2              
     MOV AL,0A4H
     OUT 19H,AL	
     
	
     
SSD24 ENDS	
END START
