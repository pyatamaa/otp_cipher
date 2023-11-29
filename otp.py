def konversiascii(input_string):
    ascii_values = []
    for char in input_string:
        ascii_value = ord(char)
        ascii_values.append(ascii_value)
    return ascii_values

def konversibiner(ascii_values):
    binary_values = []
    for value in ascii_values:
        binary_value = bin(value)[2:]
        binary_values.append(binary_value)
    return binary_values

def xor_biner(binary_values_string, binary_values_key):
    result_biner = []
    for i in range(min(len(binary_values_string), len(binary_values_key))):
        result = int(binary_values_string[i], 2) ^ int(binary_values_key[i], 2)
        result_biner.append(bin(result)[2:])
    return result_biner

def biner_ke_desimal(hasil_xor):
    desimal_values = []
    for value in hasil_xor:
        desimal_value = int(value, 2)
        desimal_values.append(desimal_value)
    return desimal_values

def kodeascii(hasil_desimal):
    karakter_values = ''
    for value in hasil_desimal:
        karakter_value = chr(value)
        karakter_values += karakter_value
    return karakter_values

input_string = input("masukkan plainteks: ")
key = input("masukkan key: ")

ascii_values_string = konversiascii(input_string)
ascii_values_key = konversiascii(key)

hasil_string = konversibiner(ascii_values_string)
hasil_key = konversibiner(ascii_values_key)

hasil_xor = xor_biner(hasil_string, hasil_key)

hasil_desimal = biner_ke_desimal(hasil_xor)

hasil_karakter = kodeascii(hasil_desimal)

# print("hasil dari konversi ascii string: ", ascii_values_string)
# print("hasil dari konversi ascii key: ", ascii_values_key)
# print("hasil dari konversi biner string: ", hasil_string)
# print("hasil dari konversi biner key: ", hasil_key)
# print(f"hasil XOR dari {input_string} dan {key} adalah {hasil_xor}")
# print(f"hasil konversi dari biner ke desimal adalah {hasil_desimal}")
# print(f"karakter untuk kode ascii {hasil_desimal} adalah '{hasil_karakter}'")
print(f"hasil dari enkripsi adalah: {hasil_karakter}")
