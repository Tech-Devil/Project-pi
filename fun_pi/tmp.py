def dec_to_bin(decimal):
        return int(bin(decimal)[2:])

#def gethex(decimal):
#        return hex(decimal)[2:]

#def getbin(decimal):
#    print int(bin(decimal)[2:])
        #return int(decimal,2) 
        #return bin(decimal)[2:]

def bin_to_dec(binary):
    return int(binary, 2)

print dec_to_bin(11)
print bin_to_dec('11')
#getbin(10)
#print gethex(12)
#print bin_to_dec(101)
