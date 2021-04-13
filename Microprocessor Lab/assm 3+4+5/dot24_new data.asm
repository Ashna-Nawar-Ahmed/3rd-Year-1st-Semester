;R6(Red)-C1(Green)-R0(Orange)-C3(Red)
DOT24 SEGMENT PARA PUBLIC 'CODE'
ASSUME CS:DOT24
ORG 1000H

START:
    ;TURN ON CONTROL REGISTER
    MOV AL, 080H
    OUT 1EH,AL
    
    ;LOOP CONTROL VARIABLE
    MOV BL,0
    
    ;SHOWING OUTPUTS
    MOV SI,OFFSET DATA      
L1: MOV AL,BYTE PTR CS:[SI] 
    ;PORT A
    OUT 18H,AL
    INC SI
    MOV AL,BYTE PTR CS:[SI] 
    ;PORT B
    OUT 1AH,AL
    INC SI
    MOV AL,BYTE PTR CS:[SI] 
    ;PORT C
    OUT 1CH,AL
    ;DELAY
    MOV CX,0EFFFH
    L2:LOOP L2
    ;INCREMENT
    INC SI
    INC BL
    CMP BL,020H
    JE PL
    MOV CX,0001H
    L8:LOOP L8
     MOV CX,0001H
    L6:LOOP L6
    JMP L1
    
    DATA:
    ;R6(Red)
    DB 0FFH    
    DB 0BFH    
    DB 01H  
    DB 0FFH
    DB 0BFH     
    DB 02H  
    DB 0FFH   
    DB 0BFH 
    DB 04H
    DB 0FFH    
    DB 0BFH    
    DB 08H
    DB 0FFH     
    DB 0BFH     
    DB 010H
    DB 0FFH   
    DB 0BFH 
    DB 020H
    DB 0FFH    
    DB 0BFH    
    DB 040H
    DB 0FFH     
    DB 0BFH     
    DB 080H
    
    ;C1(Green)
    DB 0FEH
    DB 0FFH
    DB 02H
    DB 0FCH
    DB 0FFH
    DB 02H
    DB 0F8H
    DB 0FFH
    DB 02H
    DB 0F0H
    DB 0FFH
    DB 02H
    DB 0E0H
    DB 0FFH
    DB 02H
    DB 0C0H
    DB 0FFH
    DB 02H
    DB 080H
    DB 0FFH
    DB 02H
    DB 00H
    DB 0FFH
    DB 02H  
    
    ;R0(Orange)
    DB 0FEH
    DB 0FEH
    DB 01H
    DB 0FEH
    DB 0FEH
    DB 02H
    DB 0FEH
    DB 0FEH
    DB 04H
    DB 0FEH
    DB 0FEH
    DB 08H
    DB 0FEH
    DB 0FEH
    DB 010H
    DB 0FEH
    DB 0FEH
    DB 020H
    DB 0FEH
    DB 0FEH
    DB 040H
    DB 0FEH
    DB 0FEH
    DB 080H
    
    ;C3(Red)
    DB 0FFH
    DB 0FEH
    DB 08H    
    DB 0FFH
    DB 0FCH
    DB 08H    
    DB 0FFH
    DB 0F8H
    DB 08H    
    DB 0FFH
    DB 0F0H
    DB 08H    
    DB 0FFH
    DB 0E0H
    DB 08H    
    DB 0FFH
    DB 0C0H
    DB 08H    
    DB 0FFH
    DB 080H
    DB 08H    
    DB 0FFH
    DB 00H
    DB 08H
    
    
    PL:
DOT24 ENDS
END START