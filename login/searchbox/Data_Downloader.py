import sys
import numpy as np
import pandas as pd
import yfinance as yf
import plotly.graph_objs as go

x=sys.argv[1]
x=x.upper()
df = yf.download(tickers=x, period='730d', interval='1d',progress=False)
df['MA_20']=df['Close'].rolling(20).mean()
df['MA_50']=df['Close'].rolling(50).mean()
df.dropna(inplace=True)#null values kadhnay sathi
df['SHORT_GR_LONG']=np.where(df['MA_20'] > df['MA_50'],1,0)#when crossover is happen
df['Signal']=df['SHORT_GR_LONG'].diff()
df['Buy & Sell']=np.where(df['Signal'] < 0,"BUY","NULL")
df['Buy & Sell']=np.where(df['Signal'] > 0,"SELL","NULL")#when crossover is happen
df.to_csv(x+".csv")
