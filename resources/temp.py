import pandas as pd 
from sklearn.linear_model import LinearRegression 

# Assuming 'data' is the result from the SQL query
data = pd.read_csv('processed_data.csv')  # Data exchange step
model = LinearRegression()
model.fit(data[['avg_purchase']], data['customer_id'])



