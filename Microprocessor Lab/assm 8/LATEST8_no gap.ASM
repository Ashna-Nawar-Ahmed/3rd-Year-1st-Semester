
ASSM8 SEGMENT PARA PUBLIC 'CODE'

ASSUME CS: ASSM8
ORG 1000H

; SCROLLING LETTERS  S-K-A-B

START:

 ; turn on control register
 MOV AL, 80H
 OUT 1FH, AL
 
 ; activate port a, b, c
 MOV AL, 80H
 OUT 1EH, AL
 
 ; turn ssd off
 MOV AL, 0FFH
 OUT 19H, AL
 
 ; turn led off
 MOV AL, 00H
 OUT 1BH, AL
 
 ; initialize 
 MOV BH, 80H
 MOV BL, 01H
 MOV DX, 05H  
 
 OUTER:
 
 MOV CX, 0FFH

 
 L1:
    PUSH CX
    
    CMP BL, 01H
    JG  K
     
    MOV SI, OFFSET DATA_S
    MOV DI, OFFSET DATA_LED_SSD
    JMP FORWARD
    
    K:
    CMP BL, 02H
    JG A
    MOV SI, OFFSET DATA_K
    MOV DI, OFFSET DATA_LED_SSD
    INC DI
    JMP FORWARD
    
    A:
    CMP BL, 03H
    JG B
    MOV SI, OFFSET DATA_A
    MOV DI, OFFSET DATA_LED_SSD
    ADD DI, 02H
    JMP FORWARD
    
    B:
    MOV SI, OFFSET DATA_B
    MOV DI, OFFSET DATA_LED_SSD
    ADD DI, 03H
    
    FORWARD:
    MOV AH, BH
        
    MOV CX, 05H
    SUB CX, DX
    ADD SI, CX
    ADD SI, CX
    
    MOV CX, DX
    L2: 
        PUSH CX 
        MOV AL, BYTE PTR CS:[SI]
        OUT 18H, AL
        MOV AL, BYTE PTR CS:[SI+1]
        OUT 1AH, AL
    
        MOV AL, AH 
        OUT 1CH, AL
        
        MOV AL, BYTE PTR CS:[DI]
        OUT 1BH, AL
        
        MOV AL, BYTE PTR CS:[DI+4]
        OUT 19H, AL
    
        MOV CX, 0FFH 
        D: LOOP D
        
        SHL AH, 1
        JNZ NEXT
         
        
        POP CX
        JMP BREAK 
        
        NEXT:
        ADD SI, 02H
        POP CX
                             
    LOOP L2
    
    BREAK:    
    POP CX
     
 LOOP L1 
 
 SHR BH, 1
 JNZ CONTINUE
 
 DEC DX
 JZ RESET
 
 MOV BH,01H 
 JMP CONTINUE
 
 RESET:
 
 MOV BH, 80H  
 MOV DX, 05H
 
 INC BL
 CMP BL, 04H
 JLE CONTINUE
 MOV BL, 01H  
 
 CONTINUE:
 
 JMP OUTER
 
 DATA_S:
;S
 DB 0FFH
 DB 09BH
 DB 0FFH
 DB 06DH
 DB 0FFH
 DB 06DH
 DB 0FFH
 DB 06DH 
 DB 0FFH
 DB 0B3H
 
 
 DATA_K:
;K
 DB 000H
 DB 0FFH
 DB 0EBH
 DB 0FFH
 DB 0DDH
 DB 0FFH
 DB 0BEH
 DB 0FFH
 DB 07EH
 DB 0FFH
 
 
 DATA_A:
;A
 DB 0C0H
 DB 0C0H  
 DB 0B7H
 DB 0B7H 
 DB 077H
 DB 077H 
 DB 0B7H
 DB 0B7H 
 DB 0C0H
 DB 0C0H
 
 DATA_B:
;B
 DB 0FFH
 DB 000H
 DB 0FFH
 DB 076H
 DB 0FFH
 DB 076H
 DB 0FFH
 DB 0B2H
 DB 0FFH
 DB 0C9H
 
 DATA_LED_SSD:
 DB 01H 
 DB 02H 
 DB 0CH
 DB 01H
 
 DB 0F9H 
 DB 0A4H 
 DB 0B0H 
 DB 099H  
 
 ASSM8 ENDS

END START
 

