;dot matrix+LED
;R-G-O-R
DOTLED24 SEGMENT PARA PUBLIC 'CODE'
ASSUME CS: DOTLED24
ORG 1000H

START:
    ;TURN ON DOT CONTROL REGISTER
    MOV AL,80H
    OUT 1EH,AL
    ;TURN ON CONTROL REGISTER
    OUT 1FH,AL
    ;TURN OFF SSD
    MOV AL, 0FFH
	OUT 19H, AL

;SHOWING OUTPUTS 		
AGAIN: 
	MOV SI,OFFSET DATA    
	MOV DX, 010H	   
	MOV BX,OFFSET DATA1		
		   		  
	       
TOP:
    ;PORT A	   
    MOV AL,BYTE PTR CS:[SI]
    OUT 18H,AL	
    ;LED	   
	MOV AL,BYTE PTR CS:[BX]
	OUT 1BH,AL	  
       
	INC SI          
	INC BX
           
	;PORT B	   
    MOV AL,BYTE PTR CS:[SI]
    OUT 1AH,AL
    ;LED		   
	MOV AL,BYTE PTR CS:[BX]
	OUT 1BH,AL   
    
	INC SI          
	INC BX
	   
    ;PORT C   
    MOV AL,BYTE PTR CS:[SI]
    OUT 1CH,AL
    ;LED		   
	MOV AL,BYTE PTR CS:[BX]	   
	OUT 1BH,AL	   
       	
	INC SI		   
	INC BX
	DEC DX
	   		  
	   
    
	;Delay
    MOV CX,0EFFFH
    L1:LOOP L1 
    
    ;Delay
    MOV CX,0001H
    L2:LOOP L2  
    
    ;Delay
    MOV CX,0001H
    L3:LOOP L3
	   		   
                            
	CMP DX,0H	
    JE AGAIN1
    JMP TOP



AGAIN1: 
	MOV SI,OFFSET DATA    
	MOV DX, 010H	   
	MOV BX,OFFSET DATA1		
		   		  
	       
TOP1:
    ;PORT A	   
    MOV AL,BYTE PTR CS:[SI]
    OUT 18H,AL
    ;LED		   
	MOV AL,BYTE PTR CS:[BX]
	OUT 19H,AL	  
       
	INC SI          
	INC BX
           
	;PORT B	   
    MOV AL,BYTE PTR CS:[SI]
    OUT 1AH,AL
    ;LED		   
	MOV AL,BYTE PTR CS:[BX]
	OUT 19H,AL   
    
	INC SI          
	INC BX
	   
    ;PORT C   
    MOV AL,BYTE PTR CS:[SI]
    OUT 1CH,AL
    ;LED		   
	MOV AL,BYTE PTR CS:[BX]	   
	OUT 19H,AL	   
       	
	INC SI		   
	INC BX
	DEC DX
	   		  
	
	;Delay
    MOV CX,0FFH
    L4:LOOP L4
	
	;Delay
	MOV CX,0001H
    L5:LOOP L5 
    
    ;Delay
    MOV CX,0001H
    L6:LOOP L6 
	   		   
                            
	CMP DX,0H	
    JE AGAIN1
    JMP TOP1


DATA1:

;DISPLAY R 12 TIMES
    DB 01H
    DB 01H
    DB 01H
    
    DB 01H
    DB 01H
    DB 01H
    
    DB 01H
    DB 01H
    DB 01H
    
    DB 01H
    DB 01H
    DB 01H  
    
      
    ;DISPLAY G 12 TIMES
    DB 02H
    DB 02H
    DB 02H
    
    DB 02H
    DB 02H
    DB 02H
    
    DB 02H
    DB 02H
    DB 02H
    
    DB 02H
    DB 02H
    DB 02H
    
    
    ;DISPLAY O 12 TIMES
    DB 0CH
    DB 0CH
    DB 0CH
    
    DB 0CH
    DB 0CH
    DB 0CH
    
    DB 0CH
    DB 0CH
    DB 0CH
    
    DB 0CH
    DB 0CH
    DB 0CH
    
      
    ;DISPLAY R 12 TIMES
    DB 01H
    DB 01H
    DB 01H
    
    DB 01H
    DB 01H
    DB 01H
    
    DB 01H
    DB 01H
    DB 01H
    
    DB 01H
    DB 01H
    DB 01H
    
	

DATA:
;R5(Red)
    DB 0FFH    
    DB 0DFH    
    DB 08H
      
    DB 0FFH
    DB 0DFH     
    DB 010H 
     
    DB 0FFH   
    DB 0DFH 
    DB 020H
    
    DB 0FFH    
    DB 0DFH    
    DB 040H 
    
    
    
    ;DIAGONAL1(Green)
    DB 0DFH
    DB 0FFH
    DB 040H
    
    DB 0EFH
    DB 0FFH
    DB 020H
    
    DB 0F7H
    DB 0FFH
    DB 010H 

    DB 0FBH
    DB 0FFH
    DB 08H
    
    
    ;R2(Orange)
 
    DB 0FBH
    DB 0FBH
    DB 08H  

    DB 0FBH
    DB 0FBH
    DB 04H

    DB 0FBH
    DB 0FBH
    DB 02H 

    DB 0FBH
    DB 0FBH
    DB 01H
      
    
    ;DIAGONAL2(Red)
    DB 0FFH
    DB 0FBH
    DB 01H
    
    DB 0FFH
    DB 0F7H
    DB 02H 
    
    DB 0FFH
    DB 0EFH
    DB 04H
    
    DB 0FFH
    DB 0DFH
    DB 08H   

    DOTLED24 ENDS
    END START