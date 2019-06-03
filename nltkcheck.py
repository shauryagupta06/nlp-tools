# -*- coding: utf-8 -*-
"""
Created on Wed May  8 01:10:49 2019

@author: Shaurya Gupta
"""

import re
import sys
text = sys.argv[1]
text = re.sub('[^a-zA-Z]', ' ',text)
print(text+" by python!")
"""text1 = re.sub('[^a-zA-Z]', ' ',text)
text2 = re.sub(r'\[[0-9]*\]', '',text)       
text3 = re.sub(r'\s+', ' ',text)  
print(text1)"""