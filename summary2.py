# -*- coding: utf-8 -*-
"""
Created on Thu May  9 17:06:16 2019

@author: Shaurya Gupta
"""

# -*- coding: utf-8 -*-
"""
Created on Thu May  9 15:47:36 2019

@author: Shaurya Gupta
"""

import bs4 as bs   
import urllib.request   
import re 
import nltk 
from heapq import nlargest  
 
def get_summary(url):     
    data = urllib.request.urlopen(url)       
    article = data.read() 
 
    parsed_text = bs.BeautifulSoup(article,'lxml') 
    paragraph = parsed_text.find_all('p', limit=10) 
 
    article_text = "" 
 
    for p in paragraph:           
        article_text += p.text      
 
    article_text = re.sub(r'\[[0-9]*\]', ' ', article_text)       
    article_text = re.sub(r'\s+', ' ', article_text)   
    
    article_text = re.sub(r'\[[a-zA-Z]*\]', ' ', article_text)       
    article_text = re.sub(r'\s+', ' ', article_text)  
 
    plain_text = re.sub('[^a-zA-Z]', ' ', article_text )       
    plain_text = re.sub(r'\s+', ' ', plain_text)   
    
    stopwords = nltk.corpus.stopwords.words('english') 
 
    word_frequency = {}       
    for word in nltk.word_tokenize(plain_text):           
        if word not in stopwords:             
            if word not in word_frequency.keys():                 
                word_frequency[word] = 1             
            else:                 
                word_frequency[word] += 1                          
            max_frequency = max(word_frequency.values()) 
  
    for word in word_frequency.keys():           
        word_frequency[word] = (word_frequency[word]/max_frequency)          
    
    sentences = nltk.sent_tokenize(article_text)
    
    sentence_score = {}       
    for sent in sentences:           
        for word in nltk.word_tokenize(sent.lower()):             
            if word in word_frequency.keys():                 
                if len(sent.split(' ')) < 40:                     
                    if sent not in sentence_score.keys():                         
                        sentence_score[sent] = word_frequency[word]                     
                    else:                         
                        sentence_score[sent] += word_frequency[word]                                
    summarized_sents = nlargest(10, sentence_score, key=sentence_score.get)
 
    summary = ' '.join(summarized_sents)       
    print(summary)
 
    

import requests 
import sys 
url = sys.argv[1] 
url = url.lower()
flag = 0 

r = requests.get(url) 
if r.status_code == 200:     
    flag=1 
else:     
    print('page does not exist')  
 
if flag==1:          
    get_summary(url)