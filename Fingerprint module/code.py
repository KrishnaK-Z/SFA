import code1
import code2
import math

img = input("\n Enter Thumbprint Name : ")
img = img + ".jpg"
code1.main(img)
(x, y, x1, y1) = code2.main()

# print x,'\n\n'
# print y,'\n\n'
# print x1,'\n\n'
# print y1,'\n\n'

dis1 = 0
dis2 = 0
for i in range(len(x)):
    for j in range(len(x)):
        temp1 = (x[i] - x[j]) ** 2
        temp2 = (y[i] - y[j]) ** 2
        temp3 = temp1 + temp2
        dis1 += math.sqrt(temp3)

for i in range(len(x1)):
    for j in range(len(x1)):
        temp1 = (x1[i] - x1[j]) ** 2
        temp2 = (y1[i] - y1[j]) ** 2
        temp3 = temp1 + temp2
        dis2 += math.sqrt(temp3)

Key = str(dis1) + " " + str(dis2)

print("\n\nThumb Digital Data(Value):-%s" % Key)
#print("\n\n")
#print("Key %s" % Key)
#print("\nend")
