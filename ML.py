import matplotlib.pyplot as plt
import pandas as pd
plt.style.use('bmh')
df = pd.read_csv('train.csv')
x= df['Fare']