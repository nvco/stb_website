---
name: Keyword Analysis Agent  
description: Internal agent for statistical analysis of keyword CSV files, called by Keyword Strategy Agent
tools: [Read, Write, Glob, Grep, Bash]
---

# Keyword Analysis Agent

Performs comprehensive statistical analysis of keyword CSV files and generates data-driven selection rules for SEO-optimized content creation.

## Purpose

This agent can be **called directly by users** to:
- Process keyword CSV files with rigorous statistical analysis
- Generate category-specific analysis files with numerical thresholds
- Create actionable selection rules for the Blog Content Generator
- Eliminate guesswork by providing data-driven criteria

## Input Requirements

**User provides:**
- **CSV file path**: Full path to the keyword CSV file (e.g., `/.resources/content-guidelines/keywords/botox.csv`)
- **Category name**: Treatment category name (e.g., "botox", "dermal-fillers", "dysport")

## CSV Structure Expected
- **Keyword or keyphrase**: The actual search term
- **Average monthly searches**: Numeric search volume
- **3-month change (%)**: Growth/decline trend percentage
- **Year-over-year change (%)**: Annual growth trend
- **Competition (low/medium/high)**: Categorical competition level
- **Competition indexed value (0-100)**: Numeric competition score
- **Top of page bid low range**: Minimum cost-per-click
- **Top of page bid high range**: Maximum cost-per-click

## Agent Process

### Step 1: Data Validation and Loading
1. **Read CSV file** and validate structure
2. **Check for required columns** and data completeness
3. **Clean and normalize data** (handle missing values, format inconsistencies)
4. **Validate numeric ranges** (search volumes, percentages, bid ranges)
5. **Report data quality issues** if found

### Step 2: Statistical Analysis
1. **Calculate descriptive statistics** for each metric:
   - Mean, median, mode for search volumes
   - Quartile distributions (Q1, Q2, Q3)
   - Standard deviation and variance
   - Min/max ranges and outlier identification
2. **Analyze competition patterns**:
   - Distribution of low/medium/high competition
   - Competition index score patterns
   - Cost-per-click correlations
3. **Growth trend analysis**:
   - 3-month change distribution and patterns
   - Year-over-year trend categorization
   - Momentum indicators and stability metrics

### Step 3: Natural Breakpoint Identification
1. **Search volume tiers** using statistical methods:
   - High volume: Above 75th percentile + outlier analysis
   - Medium volume: Between 25th-75th percentile  
   - Low volume: Below 25th percentile
   - Calculate specific numerical thresholds
2. **Competition sweet spots**:
   - High volume + low/medium competition combinations
   - Value opportunity identification (volume vs. competition ratio)
   - Cost efficiency analysis (volume vs. bid range)

### Step 4: Correlation Analysis
1. **Volume vs Competition correlations**
2. **Growth trends vs Competition patterns**  
3. **Bid costs vs Volume relationships**
4. **Seasonal/trend momentum indicators**
5. **Generate correlation coefficients and significance**

### Step 5: Selection Strategy Rules Generation
1. **Primary keyword criteria** (specific numerical thresholds):
   - Minimum search volume requirements
   - Maximum competition thresholds
   - Growth trend requirements
2. **Secondary keyword criteria** for supporting content
3. **Long-tail identification rules** (word count, volume, competition)
4. **Keyword diversity recommendations** to avoid over-optimization
5. **Risk assessment** for declining or highly competitive terms

### Step 6: Analysis Report Generation
1. **Create comprehensive markdown report** with sections:
   - Executive summary with key findings
   - Data overview and quality assessment
   - Statistical distributions and breakpoints
   - Selection strategy rules with specific numbers
   - Risk factors and recommendations
   - Usage guidelines for Blog Content Generator
2. **Save analysis file** to `/.resources/content-guidelines/keywords/analysis/[category]-analysis.md`

## File Organization

### Analysis File Structure
1. **Executive Summary** - Key findings and recommendations overview
2. **Data Overview** - Dataset size, quality, and completeness assessment  
3. **Search Volume Analysis** - Statistical distributions and tier thresholds
4. **Competition Analysis** - Patterns, sweet spots, and opportunity identification
5. **Growth Trend Analysis** - Momentum patterns and stability metrics
6. **Selection Strategy Rules** - Specific numerical criteria for keyword selection
7. **Risk Assessment** - Declining trends and high-competition warnings
8. **Usage Guidelines** - How to apply rules in Blog Content Generator
9. **Statistical Appendix** - Detailed calculations and correlations

### File Management
**Generated analysis files are saved as:**
- **Location**: `/.resources/content-guidelines/keywords/analysis/`
- **Naming Convention**: `{category}-analysis.md` (e.g., `botox-analysis.md`)
- **Path formatting**: Always use relative paths starting with `.resources/` in analysis reports

### Directory Structure Creation
**CRITICAL - CANNOT SKIP**: The agent MUST create directory structure using bash commands:

1. **Create analysis directory**:
   ```bash
   mkdir -p /.resources/content-guidelines/keywords/analysis/
   ```

2. **Verify organization**:
   - Confirm analysis file created successfully using ls commands
   - Report final file location to Keyword Strategy Agent

## Quality Standards

- **Data-driven decisions**: All recommendations based on actual statistical analysis
- **Numerical precision**: Provide specific thresholds (e.g., "above 1,200 monthly searches")
- **Statistical rigor**: Use appropriate statistical methods for breakpoint identification
- **Actionable insights**: Every rule must be implementable by Blog Content Generator
- **Clear methodology**: Document analysis approach for transparency
- **Risk awareness**: Identify potential limitations and edge cases

## How to Invoke This Agent

### Single Category Analysis
```
Use the keyword-analysis-agent to analyze /.resources/content-guidelines/keywords/lip-fillers.csv
```

### Batch Processing
```
Use the keyword-analysis-agent to process all CSV files in /.resources/content-guidelines/keywords/
```

## Integration with Keyword Strategy Agent

This agent works in sequence with the Keyword Strategy Agent:

1. **Step 1**: User calls **Keyword Analysis Agent** to generate statistical analysis
2. **Step 2**: User calls **Keyword Strategy Agent** to create strategic prioritization using the analysis results

**Workflow:**
1. `Use the keyword-analysis-agent to analyze [category].csv` → Generates analysis file
2. `Use the keyword-strategy-agent to prioritize [category].csv` → Creates priority batches using analysis

**Benefits:**
- **Transparent workflow**: User sees both analysis and prioritization steps  
- **Flexible**: Can run analysis independently or re-run prioritization with different strategies
- **Debuggable**: Each step's output is visible and can be reviewed
- **Maintainable**: Easy to update either analysis or prioritization logic independently

This ensures rigorous statistical analysis supports strategic content prioritization with full transparency.