import random

def my_function():
	print("The random number is between and equal 0 and 20")
	number = random.randint(0,20)

	while(True):
		inp = int(input("GUESS NOW:"))
		if(inp<number):
			print("WRONG GUESS , TRY WITH A GREATER NUMBER.")
		elif(inp>number):
			print("WRONG GUESS , TRY WITH A SMALLER NUMBER.")
		else:
			print("CONGRATS , YOU HIT THE RIGHT NUMBER.")
			break;		

my_function()